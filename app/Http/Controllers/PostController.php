<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Slide;

class PostController extends Controller
{
     public function show($slug)
    {
    	// $post=Post::where('slug',$slug)->first();
    	$post=Post::findBySlug($slug)->first();
    	$slides = Slide::all();


    	return view('post.show',['post'=> $post, 'slides' => $slides]);
    }
}
