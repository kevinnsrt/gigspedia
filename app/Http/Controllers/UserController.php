<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artists;
use App\Models\Songs;

class UserController extends Controller
{
    public function index(){
        $artists = Artists::all();
        return view('user.artist',compact('artists'));
    }

    public function songs (Request $request){
        $songs = Songs::where('id_artist',$request->id)->get();
        return view('user.songs',compact('songs'));
    }
}
