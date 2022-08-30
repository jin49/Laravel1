<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class musiclist extends Model
{
    use HasFactory;
    public function playlist(){
        return $this->belongsTo('App\Models\Playlist');
    }
    public function music(){
        return $this->belongsTo('App\Models\Music');
    }
}
