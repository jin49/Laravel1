<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;

class UserFormController extends Controller
{
    //
    public function index(){
        // $playlist = Playlist::where('user_id','=',Auth::id())->get();
        return view('user.index');
    }
}
