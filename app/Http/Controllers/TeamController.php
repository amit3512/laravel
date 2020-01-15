<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Post;
use App\Team;
use App\SLide;

class TeamController extends Controller
{
    
     public function index($slug)
    {
    	// $post=Post::where('slug',$slug)->first();
    	$posts=Post::findBySlug($slug)->first();
        
    	return view('madhyaan.team',['post'=> $posts]);
    }

    public function get()
    {
        $teams = Team::first()->paginate(5);
        $slides = Slide::all();



        return view('madhyaan.team',compact('teams','slides'))

        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

}
