<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>プレイリストに追加</h3>
    <p>以下の楽曲をプレイリストに追加します</p>
    <img src="{{$music->image}}" alt="">
    <p>{{$music->name}}/{{$music->artist->name}}</p>
    <audio controls src="http://localhost{{$music->data}}">
    <p>※お使いのブラウザでは再生できません</p>
    </audio>

    <h4>追加するプレイリストを選んでください</h4>
    <form action="/Music/add/{{$music->id}}/exec" method = post>
        @if($playlist != null)
        <select name="id">
            @foreach ($playlist as  $list)
                <option value="{{$list->id}}">{{$list->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="追加">
        @else
        <p>追加可能なプレイリストが存在しません</p>
        @endif
        <button type="button" onClick="history.back()">戻る</button>

        @csrf
    </form>
</body>
</html>
