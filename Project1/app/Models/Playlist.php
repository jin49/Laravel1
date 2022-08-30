<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function musiclist(){
        return $this->hasMany('App\Models\musiclist');
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($playlist) {
            $playlist->musiclist()->delete();
        });
    }
}
