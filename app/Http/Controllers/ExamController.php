<?php

namespace App\Http\Controllers;

use App\Exam;
use PDF;
use Excel;
use DB;
use App\Exports\ExamsExport;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams= Exam::latest()->paginate(5);



        return view('exams.index',compact('exams'))

        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'exam_id' => 'required|max:255',

            

            'obt_marks' => 'required|max:255',

            

             ]);

             Exam::create($request->all());
            return redirect()->route('exams.index')->with('success','Students created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        return view('exams.show',compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        return view('exams.edit',compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        $request->validate([
             'stu_id' => 'required|max:255',

             'exam_id' => 'required|max:255',

            
            'obt_marks' => 'required|max:255',


            

        ]);

  

        $exam->update($request->all());

  

        return redirect()->route('exams.index')->with('success','Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();

  

                return redirect()->route('exams.index')

                        ->with('success','Record deleted successfully');

    }




    public function get_exam_data()
    {
       $exam_data = DB::table('exams')
       ->limit(10)
       ->get();
       // $pdf = \App::make('dompdf.wrapper');
       // $pdf->loadHTML($this->convert_exam_data_to_html());
       // return $pdf->stream();
       return $exam_data;
   }

    public function pdf()
   {
       $pdf = \App::make('dompdf.wrapper');
       $pdf->loadHTML($this->convert_exam_data_to_html());
       return $pdf->stream();
   }

   public function convert_exam_data_to_html()
   {
       $exam_data = $this->get_exam_data();
       $output = '
       <h3 align="center">Exam Details</h3>
       <table width="100%" style="border-collapse: collapse; border: 0px;">
       <tr>
       <th style="border: 1px solid; padding:12px;" width="20%">Student_ID</th>
       
       <th style="border: 1px solid; padding:12px;" width="20%">Exam_ID</th>
       <th style="border: 1px solid; padding:12px;" width="20%">Obt_marks</th>
    


       </tr>
       ';  
       foreach($exam_data as $exam)
       {
          $output .= '
          <tr>
          <td style="border: 1px solid; padding:12px;">'.$exam->stu_id.'</td>
          <td st
          <td style="border: 1px solid; padding:12px;">'.$exam->exam_id.'</td>
          <td style="border: 1px solid; padding:12px;">'.$exam->obt_marks.'</td>
          



          </tr>
          ';
      }
      $output .= '</table>';
      return $output;
  }


  public function export() 
    {
        return Excel::download(new ExamsExport, 'exams.xlsx');
    }

}
