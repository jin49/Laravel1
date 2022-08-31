@extends('temp.common')

@section('contents')
<img id = "human-img" src="{{$album->image}}" alt="">
    <h3>{{ $album->name }}</h3>
    <h5>
        <a class = "move" href="/Artist/{{ $album->artist->id }}">{{ $album->artist->name }}</a>
    </h5>
    <br><br>
    <h5>楽曲</h5>
    <table>
        <tr>
            <td></td>
            <td>楽曲</td>
            <td></td>
            <td></td>
        </tr>
        @foreach ($album->albumlist as $music)
            <tr>
                <td><img src="{{ $music->music->image }}" alt=""></td>
                <td>{{ $music->music->name }}</td>
                <td>
                    <audio controls src="http://localhost{{ $music->music->data }}">
                        <p>※このブラウザには対応していません</p>
                    </audio>
                </td>
                <td><a href="/Music/add/{{ $music->music->id }}">【プレイリストに追加】</a></td>
                @isset(Auth::user()->admin)
                <td><a href="/Music/edit/{{ $music->music->id }}">【編集】</a></td>
                @endisset
            </tr>

            <br>
        @endforeach
    </table>
@endsection
