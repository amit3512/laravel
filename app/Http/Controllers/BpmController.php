<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BpmController extends Controller
{
    public function index()
    {
    	return view('madhyaan.bpm');
    }
}
