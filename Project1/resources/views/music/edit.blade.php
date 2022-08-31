@extends('temp.common')

@section('contents')
    <h3>楽曲編集</h3>
    <table>
        <tr>
            <td></td>
            <td></td>
        </tr>

    <form action="/Music/edit/{{$music->id}}/exec" method = "post" enctype="multipart/form-data">
        <tr><td>曲名</td>
            <td><input type="text" name="name" value = {{$music->name}}></td>
        </tr>
        <tr>
            <td>画像</td>
            <td><input type="file" name = "image" value = {{$music->image}}></td>
        </tr>
        <tr>
            <td>アーティスト</td>
            <td>
                <select name="artist_id">
                    @foreach(App\Models\Artist::all() as $artist)
                    @if($music->artist_id == $artist->id)
                    <option value={{$artist->id}} selected>{{$artist->name}}</option>
                    @else
                    <option value={{$artist->id}}>{{$artist->name}}</option>
                    @endif
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td>音声データ</td>
            <td><input type="file" name="data" value = {{$music->data}}></td>
        </tr>
    </table>

        <input type="submit" value="更新">
        <button type="button" onClick="history.back()">戻る</button>
        @csrf
    </form>
    @endsection
