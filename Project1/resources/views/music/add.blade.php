@extends('temp.common')

@section('contents')
    <p>以下の楽曲をプレイリストに追加します</p>

    <img src="{{$music->image}}" alt="">
    <p>{{$music->name}}/{{$music->artist->name}}</p>
    <audio controls src="http://localhost{{$music->data}}">
    <p>※お使いのブラウザでは再生できません</p>
    </audio>

    <h3>追加するプレイリストを選んでください</h3>
    <form action="/Music/add/{{$music->id}}/exec" method = post>
        <select name="id">
            @foreach(Auth::user()->playlist as $list)
            @php
            $array = App\Models\musiclist::where('playlist_id','=',$list->id)->where('music_id','=',$music->id)->get()
            @endphp
                @if($array == "[]")
                <option value="{{$list->id}}">{{$list->name}}</option>
                @endif
            @endforeach
        </select>
        <input type="submit" value="追加">
        <button type="button" onClick="history.back()">戻る</button>

        @csrf
    </form>
    @endsection
