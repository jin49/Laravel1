<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>{{$artist->name}}</h3>
    <a href="/">ホームへ</a>
    <h5>楽曲</h5>
    @foreach($artist->music as $m)
        <p>{{$m->name}}/画像</p>
        <audio controls src="http://localhost{{$m->data}}">
        <p>※このブラウザには対応していません</p>
        </audio>
    @endforeach
    <h5>アルバム</h5>
    @foreach ($artist->album as $a)
    <a href="/Album/{{$a->id}}">
        {{$a->name}}/画像
    </a>
    <br>

    @endforeach
</body>
</html>
