<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>{{$album->name}}/画像</h3>
    <h5>
        <a href="/Artist/{{$album->artist->id}}">{{$album->artist->name}}</a>
    </h5>
    <br><br>
    <h5>楽曲</h5>
    @foreach($album->albumlist as $music)
    <p>{{$music->music->name}}/画像</p>
    <audio controls src="http://localhost{{$music->music->data}}">
    <p>※このブラウザには対応していません</p>
    </audio>
    <br>
    @endforeach
</body>
</html>
