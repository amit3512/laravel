<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Slide;

class PagesController extends Controller
{
    public function show($slug)
    {
    	$page=Page::where('slug',$slug);
    	$slides = Slide::all();
    	return view('madhyaan.show',['page' => $page,'slides' => $slides]);
    }
    	


    	
}
