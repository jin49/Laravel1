@extends('temp.common')

@section('contents')
    <img id = "human-img" src="{{$artist->image}}" alt="">
    <h3>{{ $artist->name }}</h3>
    <h5>楽曲</h5>
    <table>
        <tr>
            <td></td>
            <td>曲名</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    @foreach ($artist->music as $m)
    <tr>
    <td><img src="{{$m->image}}" alt=""></td>
    <td>{{ $m->name }}</td>
        <td>
            <audio controls src="http://localhost{{ $m->data }}">
                <p>※このブラウザには対応していません</p>
            </audio>
        </td>
        <td>
            <a href="/Music/add/{{ $m->id }}">【プレイリストに追加】</a>
        </td>
        <td>
            @isset(Auth::user()->admin)
                <a href="/Music/edit/{{ $m->id }}">編集</a>
            @endif
        </td>
    </tr>
    @endforeach
</table>
        <h5>アルバム</h5>
        <table border="1" align="center">
            <tr>
                <td></td>
                <td>アルバム名</td>
            </tr>
        @foreach ($artist->album as $a)
            <tr>
            <td><img src="{{$a->image}}" alt=""></td>
            <td><a href="/Album/{{ $a->id }}">{{ $a->name }}</a></td>
        </tr>
        @endforeach
    </table>
    @endsection
