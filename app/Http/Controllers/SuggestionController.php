<?php

namespace App\Http\Controllers;

use App\Section;
use App\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    function store(Request $request)
    {

        /*
        $request->validate([
            'sender_name' => 'required|min:4',
            'sender_email' => 'required|email',
            'sender_message' => 'required|min:20'
        ]);
        */

        $this->validate(request(),[
            'sender_name' => 'required|min:4',
            'sender_email' => 'required|email',
            'sender_message' => 'required|min:20'
        ]);

        $section = Section::where('section_name','Admin')->first();
        Suggestion::create([
            'sender_name'=>$request->sender_name,
            'sender_email'=>$request->sender_email,
            'sender_message'=>$request->sender_message,
            'section_id'=> ($request->section_id == null) ? $section->section_id : $request->section_id,
        ]);

        return redirect()->route('welcome');
    }
}
