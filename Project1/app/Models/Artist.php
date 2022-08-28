<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    public function album(){
        return $this->hasMany('App\Models\Album');
    }public function music(){
        return $this->hasMany('App\Models\Music');
    }public function follow_artist(){
        return $this->hasMany('App\Models\Follow_artist');
    }
}
