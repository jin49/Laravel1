<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Album;
class ArtistFormController extends Controller
{
    //
    // public function index(){
    //     return view('artist.index');
    // }

    public function artist($id){
        $artist = Artist::find($id);
        $album = $artist->album;
        // dd($album);
        return view('artist.index',compact('artist','album'));
    }
    public function album($id){
        $album = Album::find($id);
        return view('artist.album',compact('album'));
    }
}
