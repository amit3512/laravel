<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    public function show($slug)
    {
    	$page=Page::where('slug',$slug);
    	return view('madhyaan.show',['page' => $page]);
    }
    	


    	
}
