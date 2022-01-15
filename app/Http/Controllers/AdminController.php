<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGameRequest;
use App\Models\Games;
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
    public function addGameForm(){
        return view('addgame', [
            "page_title" => 'Create Game'
        ]);
    }

    public function addGame(CreateGameRequest $request){
        $validated = $request->validate();
        $games = new Games;
        $games->name = $validated["name"];
        $games->category = $validated["category"];
        $games->release_date = $validated["release_date"];
        $games->developer = $validated["developer"];
        $games->publisher = $validated["publisher"];
        $games->description = $validated["description"];
        $games->long_desc = $validated["long_desc"];
        $games->price = $validated["price"];
        $games->trailer = $validated["trailer"];
        
        if ($request->file('photo')) {
            $games->cover = $request->file('cover')->store('photos');
        }
       

        $games->save();
        return redirect()->route('admin.home');
    }
}
