<?php

namespace App\Http\Controllers;

use App\Section;
use App\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    function store(Request $request)
    {

        $request->validate([
            'sender_name' => 'required|min:2',
            'sender_email' => 'required|email',
            'sender_message' => 'required|min:20'
        ],[
            'sender_name.required'=> 'You must enter your name!!!!',
            'sender_name.min'=> 'You must enter Valid name!!!!',
            'sender_email.email'=> 'You must enter Valid E-mail!!!!',
            'sender_message.min'=> 'You must enter at least 20 letter in your message!!!!',
        ]);

        $section = Section::where('section_name','Admin')->first();
        Suggestion::create([
            'sender_name'=>$request->sender_name,
            'sender_email'=>$request->sender_email,
            'sender_message'=>$request->sender_message,
            'section_id'=> ($request->section_id == null) ? $section->section_id : $request->section_id,
        ]);

        return redirect()->back()->with('message', 'IT WORKS!');
    }
}
