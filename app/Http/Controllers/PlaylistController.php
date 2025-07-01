<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaylistController extends Controller
{
    public function index(){
        return view('playlist.create');
    }


    public function store(Request $request){
    $validate = $request->validate([
            'name'=>'required|max:255',
    ]);

     $path = $request->file('gambar')->store('playlists', 'public');

    $playlist = Playlist::create([
            'id_user' => Auth::user()->id,
            'name' => $request->name,
            'gambar' => $path,
    ]);

    return redirect()->route('playlist')->with('success','Playlist berhasil dibuat');
    }
}
