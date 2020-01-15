<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class NmefrValueController extends Controller
{
    public function index()
    {
    	$slides = Slide::all();
    	return view('madhyaan.nmefr',compact('slides'));
    }
}
