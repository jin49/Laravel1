
@extends('temp.common')

@section('contents')
    <div>
        @if (Auth::id())
        <p>プレイリスト一覧</p>
            {{--  @foreach (Auth::user()::whereHas('playlist', function($query){$query->select('name')->groupBy('name');})->get() as $list)
                <a href="/PlayList/{{$list->id}}">{{$list->name}}</a>
            @endforeach  --}}
            {{--  @if(count($playlist) != 1)  --}}
                @foreach (Auth::user()->playlist as $list)
                <img src="{{$list->image}}" alt="">
                    <a href="/Playlist/{{$list->id}}">  
                        {{$list->name}}
                    </a>
                    <form action="/Playlist/delete/{{$list->id}}">
                        <input type="submit" value="削除">
                    </form>
                @endforeach
        @endif
    </div>
    <div>

    </div>
@endsection
