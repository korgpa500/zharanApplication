<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $users = User::get();
        return view('users.index')->with('users',$users);
    }
}
