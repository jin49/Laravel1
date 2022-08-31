@extends('temp.common')

@section('contents')
<img id = "human-img"src="{{$music->image}}" alt="">

<h3>{{$music->name}}</h3>
<table>
<tr>
    <td>
        <audio class="audio{{$music->id}}" controls loop src="http://localhost{{ $music->data }}">
        </audio>
    </td>

</tr>

<tr>
    <td>
        <a class = "move" href="/Artist/{{ $music->artist->id }}">
        {{$music->artist->name}}
        </a>
    </td>
</tr>

</table>





@endsection
