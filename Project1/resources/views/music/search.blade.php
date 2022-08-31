@extends('temp.common')

@section('contents')
    <h3>  検索ページ</h3>
    <form action="#" method=get>
        <input type="text" name="key" value={{ old('key') }}>
        <input type="submit" value="検索">
    </form>

    @isset($key)
        <h5>楽曲</h5>
        <table border = "3">
        @foreach (App\Models\Music::select()->where('name', 'like', "%{$key}%")->get() as $music)
            <tr>
                <td><img src="{{ $music->image }}" alt=""></td>
                <td><a href="/Music/detail/{{$music->id}}">
                {{ $music->name }}
            </a>
                </td>
            <td>
                <a class = "move" href="/Artist/{{$music->artist_id}}">
                {{ $music->artist->name }}
            </a>
            </td>
            <td><a href="/Music/add/{{ $music->id }}">【プレイリストに追加】</a></td>
            @isset(Auth::user()->admin)
                <td><a href="/Music/edit/{{ $music->id }}">【編集】</a></td>
            @endisset
            </tr>
        @endforeach
    </table>


        <br><br>
            <h5>アーティスト</h5>
            @foreach (App\Models\Artist::select()->where('name', 'like', "%{$key}%")->get() as $artist)
                <a class = "move" href="/Artist/{{ $artist->id }}">
                    <img src="{{$artist->image}}" alt="">{{ $artist->name }}</a><br><br>
            @endforeach
        <br><br>
            <h5>アルバム</h5>
            @foreach (App\Models\Album::select()->where('name', 'like', "%{$key}%")->get() as $album)

                    <img src="{{$album->image}}" alt="">
                    <a class = "move" href="/Album/{{ $album->id }}">{{ $album->name }}</a>
                    <a class = "move" href="/Artist/{{ $album->artist_id }}">{{ $album->artist->name }}</a>

                <br>
            @endforeach
        @endisset
@endsection
