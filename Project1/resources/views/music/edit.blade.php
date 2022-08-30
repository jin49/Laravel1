<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>楽曲編集</h3>
    <form action="/Music/edit/{{$music->id}}/exec" method = "post" enctype="multipart/form-data">
        曲名<input type="text" name="name" value = {{$music->name}}> <br>
        画像<input type="file" name = "image" value = {{$music->image}}> <br>
        アーティスト
        <select name="artist_id">
            @foreach(App\Models\Artist::all() as $artist)
            @if($music->artist_id == $artist->id)
            <option value={{$artist->id}} selected>{{$artist->name}}</option>
            @else
            <option value={{$artist->id}}>{{$artist->name}}</option>
            @endif
            @endforeach
        </select> <br>
        音声データ <input type="file" name="data" value = {{$music->data}}>
        <br>

        <input type="submit" value="更新">
        <button type="button" onClick="history.back()">戻る</button>
        @csrf
    </form>
</body>
</html>
