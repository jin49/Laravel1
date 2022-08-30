<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = 'album';
    public function follow_album(){
        return $this->hasMany('App\Models\Follow_album');
    }
    public function albumlist(){
        return $this->hasMany('App\Models\albumlist');
    }
    public function artist(){
        return $this->belongsTo('App\Models\Artist');
    }
}
