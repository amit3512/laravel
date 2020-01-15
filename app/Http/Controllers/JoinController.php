<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JoinController extends Controller
{
     public function index()
    {
        $joins = DB::table('sudents')
        
        ->join('exams','sudents.id','=','exams.stu_id')
        ->join('subjects','exams.exam_id','=','subjects.sub_id')
        ->select('sudents.name','subjects.sub_name','exams.obt_marks')
        // ->select('CASE WHEN obt_marks  >= 40 THEN 'Good Day' WHEN obt_marks < 40 THEN 'OK Day' ELSE 'Bad Day' END');
        // ->select('sudents.name','exams.obt_marks',
        //   DB::raw('(CASE WHEN exams.obt_marks >= 40 
        //             THEN "active" WHEN exams.obt_marks  < 40
        //             THEN "not active" 
        //             ELSE "pending" END)' 
        //             ))
        ->get();

        // var_dump($joins);die();

        return view('results.join',['joins'=>$joins]);

    }


   }