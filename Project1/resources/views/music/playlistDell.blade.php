@extends('temp.common')

@section('contents')
    <h3>以下のプレイリストを削除します</h3>
    <h5>{{$playlist->name}}</h5>
    <h5>楽曲</h5>
    @foreach($playlist->musiclist as $list)
        <p>{{$list->music->name}}/画像</p>
    @endforeach

    <form action="#" method = post>
        <input type="submit" value="実行">
        @csrf
    </form>
    <button type="button" onClick="history.back()">戻る</button>
    @endsection
