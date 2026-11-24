@extends("app")

@section("content")

<h1>Les albums</h1>

<ul>
    @foreach($albums as $album)
        <li>
            <a href="{{ route('detailalbum', ['id' => $album->id]) }}">
                {{ $album->titre }}
            </a>
            (créé le {{ $album->creation }})
        </li>
    @endforeach
</ul>

@endsection