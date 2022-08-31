@extends('temp.common')

@section('contents')
<img id = "human-img" src="{{$musics->image}}" alt="">
    <h3>{{ $musics->name }}</h3>
    <br>
    <table border="1">
        <tr>
            <td></td>
            <td>曲名</td>
            <td>アーティスト名</td>
            <td></td>
            <td></td>
        </tr>


    @foreach ($musics->musiclist as $list)
    <tr>
        <td><img src="{{ $list->music->image }}" alt=""></td>
        <td>{{ $list->music->name }}</td>
        <td>{{ $list->music->artist->name }}</td>
        <td>
            <audio class="audio{{$list->id}}" controls loop src="http://localhost{{ $list->music->data }}">
            </audio>
        </td>

        <td><a href="/Music/delete/{{ $list->id}}/">プレイリストから削除</a></td>
    </tr>
    @endforeach
</table>

    <a class = "move" href="/Search">⊕プレイリストに楽曲を追加(検索へ移動)</a>
@endsection
