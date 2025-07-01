<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'playlists';

     protected $fillable = [
        'id_user',
        'name',
        'gambar',
    ];

    public $timestamps = false;
}
