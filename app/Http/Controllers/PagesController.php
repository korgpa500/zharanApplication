<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function welcome(){
        $sections = Section::where('section_name','!=','Admin')->get();
        return view('welcome')->with('sections' ,$sections);
    }
    function aboutView(){
        return view('pages.about');
    }

    function kgView(){
        return view('pages.kg');
    }

    function primaryView(){
        return view('pages.primary');
    }

    function mGirlsView(){
        return view('pages.m_girls');
    }

    function mBoysView(){
        return view('pages.m_boys');
    }

    function sGirlsView(){
        return view('pages.s_girls');
    }

    function sBoysView(){
        return view('pages.s_boys');
    }
}
