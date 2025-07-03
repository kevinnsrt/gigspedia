<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\PlaylistSongs;
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
            'deskripsi'=> 'required|max:255'
    ]);

     $path = $request->file('gambar')->store('playlists', 'public');

    $playlist = Playlist::create([
            'id_user' => Auth::user()->id,
            'name' => $request->name,
            'gambar' => $path,
            'deskripsi'=>$request->deskripsi
    ]);

    return redirect()->route('playlist')->with('success','Playlist berhasil dibuat');
    }

   public function details($id)
    {
        $details = PlaylistSongs::with(
            [
                'playlist',
                'songs',
            ]
        )->where('id_playlist',$id)->get();
        return view('playlist.playlist', compact('details'));
    }

    public function add(Request $request){

        $songs = PlaylistSongs::where('id_lagu',$request->id)->get();

        if ($songs->isEmpty()) {
            $playlist = PlaylistSongs::create([
            'id_lagu'=>$request->id,
            'id_playlist'=> $request->id_playlist,
        ]);

        return redirect()->route('playlist')->with('lagu','Lagu sudah berhasil ditambahkan');
        }
        else{
            return redirect()->route('user.artists')->with('error','Lagu sudah ada di playlist');
        }
    }

    public function delete($id){
        $playlist = Playlist::where('id',$id)->delete();

        return redirect()->route('playlist')->with('delete','Playlist Berhasil Dihapus');
    }

    public function songsDelete($id){
        $songs = PlaylistSongs::where('id_lagu',$id)->delete();
        return redirect()->route('playlist')->with('deleteLagu','Lagu Berhasil Dihapus');
    }

}
