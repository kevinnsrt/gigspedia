<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    protected $table = 'songs';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id';

     public function artists(): BelongsTo
    {
        return $this->belongsTo(Artists::class,'id');
    }
}
