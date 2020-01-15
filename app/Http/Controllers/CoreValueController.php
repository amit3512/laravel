<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class CoreValueController extends Controller
{
    public function index()
    {
    	$slides = Slide::all();

    	return view('madhyaan.corevalues',['slides' => $slides]);
    }
}
