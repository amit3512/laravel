<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Slide;

class IntroController extends Controller
{
    
    public function index()
    {
    	$posts=Post::simplePaginate(2);
        $slides = Slide::all();
    	return view('madhyaan.index',['posts'=> $posts,'slides'=> $slides]);
    }


    // public function show()
    // {
    // 	$post=Post::where('slug',$slug)->first();
    // 	return view('madhyaan.show',['post'=> $post]);
    // }


//      public function show($slug)
//     {
//     	// $post=Post::where('slug',$slug)->first();
//     	$post=Post::findBySlug($slug)->first();
//     	return view('post.show',['post'=> $post]);
//     }
// 
   
    

    



}



