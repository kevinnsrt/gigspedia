<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artists;

class GenreController extends Controller
{
    //

    public function index ($id){
        $artists = Artists::where('id',$id)->get();
        return view('genre.artist',compact('artists'));
    }
}
