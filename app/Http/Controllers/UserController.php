<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artists;
use App\Models\Songs;
use App\Models\Genres;
use App\Models\Playlist;


class UserController extends Controller
{
    public function index(){
        $artists = Artists::all();
        return view('user.artist',compact('artists'));
    }

    public function songs ($id){
        $songs = Songs::where('id_artist',$id)->get();
        return view('user.songs',compact('songs'));
    }

    public function genre(){
        $genre = Genres::all();
        return view('user.genre',compact('genre'));
    }

    public function playlist(){

        $playlists = Playlist::all();
        return view('user.playlist',compact('playlists'));
    }
}
