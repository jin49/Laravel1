<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    public function follow_album(){
        return $this->hasMany('App\Models\Follow_album');
    }
    public function music(){
        return $this->belongsTo('App\Models\Music');
    }
    public function artist(){
        return $this->belongsTo('App\Models\Artist');
    }
}
