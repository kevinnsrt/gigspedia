<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Playlist;
use App\Models\Songs;

class PlaylistSongs extends Model
{
    protected $table = 'playlist_songs';
    public $incrementing = false;
    protected $primaryKey = null;
    public $timestamps = false;
     protected $fillable = [
        'id_playlist',
        'id_lagu',
    ];

      public function playlist()
    {
        return $this->belongsTo(Playlist::class, 'id_playlist');
    }

   public function songs()
    {
        return $this->belongsTo(Songs::class, 'id_lagu');
    }

}
