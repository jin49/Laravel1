<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>確認画面</h3>
    <p>以下の楽曲をプレイリストから削除します</p>
    <img src="{{$list->music->image}}" alt="">
    <p>{{$list->music->name}}/{{$list->music->artist->name}}</p>
    <audio controls src="http://localhost{{$list->music->data}}">
    <p>※お使いのブラウザでは再生できません</p>
    </audio>
    <br>
    <button type="button" onClick="history.back()">戻る</button>
    <form action="/Music/delete/{{$list->id}}/exec" method = post>
        <input type="submit" value="実行">
        @csrf
    </form>
</body>
</html>
