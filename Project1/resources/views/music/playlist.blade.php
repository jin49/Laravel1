<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
    <h3>{{$musics->name}}</h3>
    <a href="/">ホーム画面へ</a>
    <br>
    @foreach($musics->musiclist as $list)
        <img src="{{$list->music->image}}" alt="">/{{$list->music->name}}/{{$list->music->artist->name}}
        {{--  <img src="{{$list->music->image}}" alt="">  --}}
        <audio class = "audio" controls loop src="http://localhost{{$list->music->data}}">
        </audio>
        <a href="/Music/edit/{{$list->music->id}}">楽曲を編集</a>
        <a href="/Music/delete/{{$list->id}}">プレイリストから削除</a>
        <br>
    @endforeach

    <a href="/Search">⊕楽曲を追加(検索へ移動)</a>

</body>
</html>
