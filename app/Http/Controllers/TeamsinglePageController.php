<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsinglePageController extends Controller
{
    public function index()
    {
    	return view('madhyaan.team_singlepage');
    }
}
