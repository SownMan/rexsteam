<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    public function guessMenu(){
        if(!Auth::check()){
            $games = Games::paginate(8);
            return view('guessMenu',[
                'games' => $games
            ]);
        }else{
            if(Auth()->user()->role == 'Admin'){
                return redirect()->route('admin.home');
            }
            elseif(Auth()->user()->role == 'User'){
                return redirect()->route('user.home');
            }
        }
       
    }
    
}
