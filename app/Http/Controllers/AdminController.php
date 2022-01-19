<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGameRequest;
use App\Models\Games;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $games = Games::paginate(8);
        return view('home.admin.home', [
            'games' => $games
        ]);
    }

    public function profile(){
        return view('home.admin.profile');
    }



    public function addGameForm(){
        return view('home.admin.addgame');
    }

    public function addGame(CreateGameRequest $request){
        
        $validated = $request->validated();
        $name = $request->file('cover')->getClientOriginalName();
        $request->file('cover')->storeAs('public/images/', $name);

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
        $games->cover = $name;

        
        
        $games->save();
        return redirect()->route('admin.home');
    }

    public function manageGame(){
        return view('home.admin.manage_game');
    }

    public function gameDetails($id)
    {
        $games= Games::findorFail($id);
        return view('home.admin.gamedetail', [
            'games' => $games
        ]);
    }
}
