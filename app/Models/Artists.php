<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Artists extends Model
{
    protected $table = 'artists';

     public function genres(): BelongsTo
    {
        return $this->belongsTo(Genres::class,'id_genre');
    }
}
