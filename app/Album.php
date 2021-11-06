<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Photo;

class Album extends Model
{
    protected $fillable = ['name', 'description', 'cover_image',];

    protected $hidden = ['created_at', 'updated_at'];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
