@extends('temp.common')

@section('contents')

<h3>楽曲新規作成</h3>
<table>
    <form action="#" method = post enctype="multipart/form-data">
        <tr>
            <td>曲名</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>画像</td>
            <td><input type="file" name = "image" value = ""></td>
        </tr>
        <tr>
            <td>音声データ</td>
            <td><input type="file" name="data" value = ""></td>
        </tr>
    </table>
    <input type="hidden" name="artist_id" value = {{Auth::user()->admin->artist_id}}>
    <input type="submit" value="作成">
    @csrf
    </form>


@endsection
