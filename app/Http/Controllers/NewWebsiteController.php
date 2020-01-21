<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class NewWebsiteController extends Controller
{
    public function index()
    {
    	$slides=Slide::all();
    	return view('madhyaan.newwebsite',compact('slides'));
    }
}
