@extends('temp.common')

@section('contents')
    <h3>プレイリストの追加</h3>
    <form action="#" method = post enctype="multipart/form-data">
        <p>名前 <input type="text" name="name"></p>
        <p>画像 <input type="file" name="image"></p>
        <input type="submit" value = "作成">
        @csrf
    </form>
    @endsection
