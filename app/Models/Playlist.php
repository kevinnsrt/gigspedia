<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PlaylistSongs;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Playlist extends Model
{
    protected $table = 'playlists';

     protected $fillable = [
        'id_user',
        'name',
        'gambar',
    ];

    public $timestamps = false;

        public function playlistSongs(): HasMany
    {
        return $this->hasMany(PlaylistSongs::class,'id');
    }
}
