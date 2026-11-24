@extends("app")

@section("content")

<h1>{{ $album->titre }}</h1>
<p>Créé le {{ $album->creation }}</p>

<p><a href="{{ route('albums') }}">Retour aux albums</a></p>

@if(count($photos) == 0)
    <p>Aucune photo dans cet album.</p>
@else
    <div class="photos">
        @foreach($photos as $photo)
            <div class="photo">
                <img src="{{ $photo->url }}" alt="{{ $photo->titre }}" width="200">
                <p>{{ $photo->titre }} - note : {{ $photo->note }}</p>
            </div>
        @endforeach
    </div>
@endif

@endsection