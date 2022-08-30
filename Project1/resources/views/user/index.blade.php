<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="/">ホーム</a><br>
        <a href="/Search">検索</a><br>
        <a href="/PlaylistAdd">プレイリストの追加</noframes></a><br>
        @if (Auth::id())
            <p>ユーザー名：{{Auth::user()->name}}</p>
            <h3>プレイリスト一覧</h3>

            {{--  @foreach (Auth::user()::whereHas('playlist', function($query){$query->select('name')->groupBy('name');})->get() as $list)
                <a href="/PlayList/{{$list->id}}">{{$list->name}}</a>
            @endforeach  --}}
            {{--  @if(count($playlist) != 1)  --}}
                @foreach ($playlist as $list)
                <img src="localhost{{$list->image}}}" alt="">
                    <a href="/Playlist/{{$list->id}}">
                        {{$list->name}}
                    </a>
                    <form action="/Playlist/delete/{{$list->id}}">
                        <input type="submit" value="削除">
                    </form>
                @endforeach
                {{--  @endforeach
            @else
                <form action="/PlayList/{{$playlist->id}}" method = get>
                    <input type="submit" value={{$playlist->name}}>
                </form>
            @endif  --}}
            <form action="{{ route('logout') }}" method="POST">
                <button type="submit">ログアウト</button>
                @csrf
            </form>
        @else
        <a href="/login">ログイン</a>
        @endif
    </div>
    <div>

    </div>

</body>
</html>
