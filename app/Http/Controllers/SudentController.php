<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Sudent;
use DB;
use Excel;
use App\Exports\SudentsExport;

class SudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sudents = Sudent::first()->paginate(5);



        return view('sudents.index',compact('sudents'))

        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sudents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());die();
        $request->validate([

           

            'name' => 'required|max:255',

            'address' => 'required|max:255',

            'email' => 'required|unique:sudents|max:255',

            'mobile' => 'required|max:20',

            'image' => 'required|max:200',

        ]);


        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $name = time().'.'.$file->getClientOriginalExtension();
        //     $destinationPath = public_path('/storage/galeryImages/');
        //     $file->move($destinationPath, $name);
        //     $file->save();
        //     // return back()->with('success','Image Upload successfully');
        // }

        









        Sudent::create($request->all());
        return redirect()->route('sudents.index')->with('success','Students created successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sudent  $sudent
     * @return \Illuminate\Http\Response
     */
    public function show(Sudent $sudent)
    {
        return view('sudents.show',compact('sudent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sudent  $sudent
     * @return \Illuminate\Http\Response
     */
    public function edit(Sudent $sudent)
    {
        return view('sudents.edit',compact('sudent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sudent  $sudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sudent $sudent)
    {
        $request->validate([

           

           'name' => 'required|max:255',

           'address' => 'required|max:255',

           'email' => 'required|max:255',

           'mobile' => 'required|max:20',

       ]);



        $sudent->update($request->all());



        return redirect()->route('sudents.index')->with('success','Sudent updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sudent  $sudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sudent $sudent)
    {
        $sudent->delete();



        return redirect()->route('sudents.index')

        ->with('success','Sudent deleted successfully');

    }

    public function get_sudent_data()
    {
       $sudent_data = DB::table('sudents')
       ->limit(10)
       ->get();
       // $pdf = \App::make('dompdf.wrapper');
       // $pdf->loadHTML($this->convert_sudent_data_to_html());
       // return $pdf->stream();
       return $sudent_data;
   }

   

   public function convert_sudent_data_to_html()
   {
       $sudent_data = $this->get_sudent_data();
       $output = '
       <h3 align="center">Student Data</h3>
       <table width="100%" style="border-collapse: collapse; border: 0px;">
       <tr>
       <th style="border: 1px solid; padding:12px;" width="20%"> Name</th>
       
       <th style="border: 1px solid; padding:12px;" width="20%">Address</th>
       <th style="border: 1px solid; padding:12px;" width="20%">Email</th>
       <th style="border: 1px solid; padding:12px;" width="20%">Mobile No.</th>


       </tr>
       ';  
       foreach($sudent_data as $sudent)
       {
          $output .= '
          <tr>
          <td style="border: 1px solid; padding:12px;">'.$sudent->name.'</td>
          <td st
          <td style="border: 1px solid; padding:12px;">'.$sudent->address.'</td>
          <td style="border: 1px solid; padding:12px;">'.$sudent->email.'</td>
          <td style="border: 1px solid; padding:12px;">'.$sudent->mobile.'</td>



          </tr>
          ';
      }
      $output .= '</table>';
      return $output;
  }

   public function pdf()
   {
       $pdf = \App::make('dompdf.wrapper');
       $pdf->loadHTML($this->convert_sudent_data_to_html());
       return $pdf->stream();
   }

   public function export() 
    {
        return Excel::download(new SudentsExport, 'sudents.xlsx');
    }



  
}
