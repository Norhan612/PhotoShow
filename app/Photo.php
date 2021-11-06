<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Album;

class Photo extends Model
{
    protected $fillable = ['album_id', 'photo', 'title', 'size', 'description'];

    protected $hidden = ['created_at', 'updated_at'];

    public function album()
    {
        return $this->belongsTo(Album::class,'album_id');
    }
}
