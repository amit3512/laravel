<?php

namespace App\Http\Controllers;

use App\Subject;
use DB;
use PDF;
use Excel;
use Illuminate\Http\Request;
use App\Exports\SubjectsExport;


class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
    	$subjects = Subject::latest()->paginate(5);



    	return view('subjects.index',compact('subjects'))

    	->with('i', (request()->input('page', 1) - 1) * 5);
    	// $subject_data = $this->get_subject_data();
    	// return view('subjects.index')->with('subject_data', $subject_data);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('subjects.create');
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

    		'stu_id' => 'required|max:255',

    		'sub_name' => 'required|max:255',





    	]);

    	Subject::create($request->all());
    	return redirect()->route('subjects.index')->with('success','Subject added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
    	return view('subjects.show',compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
    	return view('subjects.edit',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
    	$request->validate([

    		'stu_id' => 'required|max:255',
    		
    		'sub_name' => 'required|max:255',


    	]);



    	$subject->update($request->all());



    	return redirect()->route('subjects.index')->with('success','Subjects updated successfully   ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
    	$subject->delete();



    	return redirect()->route('subjects.index')

    	->with('success','Delete successful');

    }

    public function get_subject_data()
    {
    	$subject_data = DB::table('subjects')
    	->limit(10)
    	->get();
    	return $subject_data;
    }

    public function pdf()
    {
    	$pdf = \App::make('dompdf.wrapper');
    	$pdf->loadHTML($this->convert_subject_data_to_html());
    	return $pdf->stream();
    }

    public function convert_subject_data_to_html()
    {
    	$subject_data = $this->get_subject_data();
    	$output = '
    	<h3 align="center">Subject Data</h3>
    	<table width="100%" style="border-collapse: collapse; border: 0px;">
    	<tr>
    	<th style="border: 1px solid; padding:12px;" width="20%">Subject_ID</th>
    	<th style="border: 1px solid; padding:12px;" width="20%">Name</th>


    	</tr>
    	';  
    	foreach($subject_data as $subject)
    	{
    		$output .= '
    		<tr>
    		<td style="border: 1px solid; padding:12px;">'.$subject->id.'</td>
    		<td style="border: 1px solid; padding:12px;">'.$subject->sub_name.'</td>


    		</tr>
    		';
    	}
    	$output .= '</table>';
    	return $output;
    }


    public function export() 
    {
        return Excel::download(new SubjectsExport, 'subjects.xlsx');
    }

    
}
