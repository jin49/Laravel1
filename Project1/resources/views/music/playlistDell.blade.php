<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
