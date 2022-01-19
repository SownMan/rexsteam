<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $games = Games::paginate(8);
        return view('home.user.home', [
            'games' => $games
        ]);
    }

    public function profile(){
        return view('home.user.profile');
    }

    public function settings(){
        return view('home.user.settings');
    }

    public function gameDetails($id)
    {
        $games= Games::findorFail($id);
        return view('home.user.gamedetails', [
            'games' => $games
        ]);
    }
}
