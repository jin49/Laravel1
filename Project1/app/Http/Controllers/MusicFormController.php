<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use App\Models\Music;
use App\Models\musiclist;
use Illuminate\Support\Facades\Auth;

class MusicFormController extends Controller
{
    //
    public function index(){
    return view('music.index');
    }
    public function search(Request $r){
        if($r->key != null){
            $key = $r->key;
            return view('music.search',compact('key'));
        }else{
            return view('music.search');
        }
    }
    public function playlist($id){
        $musics = Playlist::find($id);
        return view('music.playlist',compact('musics'));
    }
    public function playlistAdd(){
        return view('music.playlistAdd');
    }
    public function playlistAddExec(Request $request){
        $playlist = new Playlist();
        $playlist->name = $request->name;
        $playlist->user_id = Auth::id();
        if(isset($request->image)){
            $image_pass = "/".$request->image->store('image','public');
            $playlist->image = $image_pass;
        }
        $playlist->save();
        return redirect('/');

    }
    public function playlistDelete($id){
        $playlist = Playlist::find($id);
        return view('music.playlistDell',compact('playlist'));
    }
    public function playlistDeleteExec($id){
        $playlist = Playlist::find($id);
        $playlist->delete();
        return redirect('/');
    }
    public function musicAdd($id){
        $music = Music::find($id);

        // $playlist = Playlist::select('name')->where('user_id','=',Auth::id())->whereHas('musiclist', function ($query) use ($id) {
        //     $query->where('music_id','=',$id);
        // })->get();
        // $allList = Playlist::select('name')->where('user_id','=',Auth::id())->get();
        // // dd($allList,$playlist);
        // if(count($playlist) == 0){
        //     $playlist = $allList;
        // }elseif($allList == $playlist){
        //     $playlist = null;
        // }else{
        //     $playlist = array_diff($allList->name,$playlist->name);
        // }
        // dd($playlist);
        return view('music.add',compact('music'));//,'playlist'));
    }
    public function musicAddExec($id,Request $r){
        $new_list = new musiclist();
        $new_list->playlist_id = $r->id;
        $new_list->music_id = $id;
        $new_list->save();
        return redirect("/");
    }


    public function musicEdit($id){
        $music = Music::find($id);
        return view('music.edit',compact('music'));
    }
    public function musicEditExec($id,Request $request){
        $Music = Music::find($id);
        $Music->name = $request->name;
        $Music->artist_id = $request->artist_id;
        $image_pass = "/".$request->image->store('image','public');
        $data_pass = "/".$request->data->store('musicData','public');
        $Music->data = $data_pass;
        $Music->image = $image_pass;
        $Music->save();
        return redirect('/');
    }
    public function musicDelete($id){
        $list = musiclist::find($id);
        return view('music.delete',compact('list'));
    }
    public function musicDeleteExec($id){
        $music = musiclist::find($id);
        $music->delete();
        return view('user.index');
    }
    public function musicCreate(){
        if(isset(Auth::user()->admin)){
            return view('music.create');
        }else{
            return redirect('/');
        }
    }
    public function musicCreateExec(Request $request){
        // dd($request);
        $new_music = new Music();
        $new_music->name = $request->name;
        $new_music->artist_id = $request->artist_id;
        $image_pass = "/".$request->image->store('image','public');
        $data_pass = "/".$request->data->store('musicData','public');
        $new_music->data = $data_pass;
        $new_music->image = $image_pass;
        $new_music->save();
        return redirect('/');

    }
    public function detail($id){
        $music = Music::find($id);
        return view('music.detail',compact('music'));
    }
}
