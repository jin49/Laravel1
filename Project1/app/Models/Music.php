<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    public function playlist(){
        return $this->hasMany('App\Models\Playlist');
    }
    public function Favorite(){
        return $this->hasMany('App\Models\Favorite');
    }
    public function artist(){
        return $this->belongsTo('App\Models\Artist');
    }
}
