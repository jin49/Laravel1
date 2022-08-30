<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>検索ページ</h3>
    <a href="/">ホーム画面</a>
    <form action="#" method = get>
        <input type="text" name = "key" value = {{old('key')}}>
        <input type="submit" value="検索">
    </form>
    @isset($key)


    <h5>楽曲</h5>
    @foreach (App\Models\Music::select()->where('name','like',"%{$key}%")->get() as $music)
        <p>画像/{{$music->name}}/{{$music->artist->name}}</p>
        <audio controls src="http://localhost{{$music->data}}">
        <p>※お使いのブラウザでは再生できません</p>
        </audio>
        <a href="/Music/add/{{$music->id}}">プレイリストに追加</a>
        <a href="/Music/edit/{{$music->id}}">編集</a>
    @endforeach
    @endisset
    <br><br>
    @isset($key)


    <h5>アーティスト</h5>
    @foreach (App\Models\Artist::select()->where('name','like',"%{$key}%")->get() as $artist)
        <a href="/Artist/{{$artist->id}}">画像/{{$artist->name}}</a><br>
    @endforeach
    @endisset
    <br><br>
    @isset($key)
    <h5>アルバム</h5>
    @foreach (App\Models\Album::select()->where('name','like',"%{$key}%")->get() as $album)
    <a href="/Album/{{$album->id}}">
        画像/{{$album->name}}/{{$album->artist->name}}
    </a>
    <br>
    @endforeach
    @endisset
</body>
</html>
