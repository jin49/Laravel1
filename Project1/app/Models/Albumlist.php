<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albumlist extends Model
{
    use HasFactory;
    public function music(){
        return $this->belongsTo('App\Models\Music');
    }public function album(){
        return $this->belongTo('App\Models\Album');
    }
}
