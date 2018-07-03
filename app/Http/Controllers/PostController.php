<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_title' => 'required|min:3',
            'post_body' => 'required|min:10',
            'post_image' => 'image|max:2084',
        ]);


        $path = "";
        if ($request->post_image != "") {
            $path = $request->post_image->store('avatars/posts', 'public');
        }

        Post::create([
            'post_title' => $request->post_title,
            'post_body' => $request->post_body,
            'post_image' => $path,
            'user_id' => Auth::user()->user_id,
            'section_id' => $request->section_id,
        ]);

        return redirect()->back();
    }
}
