<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('home.admin.home');
    }

    public function profile(){
        return view('home.admin.profile');
    }

    public function settings(){
        return view('home.admin.settings');
    }
    public function createGameForm(){
        return view('craete_games', [
            "page_title" => 'Create Game'
        ]);
    }
}
