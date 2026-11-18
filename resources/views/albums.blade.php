@extends("app")

@section("content")

<h1>Mes albums</h1>

<ul>
    @foreach($albums as $album)
        <li>
            {{ $album->titre }} (créé le {{ $album->creation }})
        </li>
    @endforeach
</ul>

@endsection