<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Slide;


class SendEmailController extends Controller
{
    function index()
    {
    $slides=Slide::all();
     return view('send_mail',compact('slides'));
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'message'   =>   $request->message
        );

     Mail::to('ambadcr7@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}