<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use App\Models\Genres;
use App\Models\Artists;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(){
        $artists = Artists::all();
        return view('user.artist',compact('artists'));
    }

    public function songs ($id){
        $songs = Songs::where('id_artist',$id)->get();
        $playlists = Playlist::where('id_user',Auth::user()->id)->get();
        return view('user.songs',compact('songs','playlists'));
    }

    public function genre(){
        $genre = Genres::all();
        return view('user.genre',compact('genre'));
    }

    public function playlist(){

        $playlists = Playlist::all();
        return view('user.playlist',compact('playlists'));
    }

    public function search (Request $request){
        $results = Artists::where('name',$request->search)->get();

        return view('user.search',compact('results'));
    }
}
