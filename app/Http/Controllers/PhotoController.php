<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    function index()
    {
        return view('photos.index');
    }

    function create()
    {
        $sections = Section::where('section_name', '!=', 'Admin')->get();
        return view('photos.create')->with('sections', $sections);
    }

    function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5',
            'img_url' => 'required|image'
        ]);

        $path = $request->img_url->store('avatars/gallery', 'public');

        Photo::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->user_id,
            'section_id' => $request->section_id,
            'img_url' => $path,
        ]);

        return redirect()->back()->with('upload_image', 'IT WORKS!');

    }
}
