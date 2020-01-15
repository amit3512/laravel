<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class SlideController extends Controller
{
	public function index()
	{
    $slides = Slide::all();



    return view('header.nav',compact('slides'));

        

}

}


