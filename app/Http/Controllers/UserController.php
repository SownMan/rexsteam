<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('home.user.home');
    }

    public function profile(){
        return view('home.user.profile');
    }

    public function settings(){
        return view('home.user.settings');
    }
}
