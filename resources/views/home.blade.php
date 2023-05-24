@extends('layouts.app')

@section('content')
{{-- Container --}}
<div class="container">
    {{-- Row --}}
    <div class="row row-cols-4 g-4">
        {{-- For each --}}
        @foreach ($movies as $movie)
        {{-- Columns --}}
        <div class="col">
            {{-- Card --}}
            <div class="card h-100 border-0" style="width: 18rem;">
                <img src="{{ $movie['image'] }}" class="card-img-top" alt="{{ $movie['title'] }}">
                <div class="card-body">
                    <div class="title"><h5>Title: {{ $movie['title'] }}</h5></div>
                    <div class="original-title">Original title: {{ $movie['original_title'] }}</div>
                    <div class="nationality">Nationality: {{ $movie['nationality'] }}</div>
                    <div class="rating">Rating: {{ $movie['vote'] }}</div>
                </div>
            </div>
            {{-- End Card --}}
        </div>
        {{-- Columns --}}
        @endforeach
        {{-- End For each --}}
    </div>
    {{-- End Row --}}
</div>
{{-- End Container --}}
@endsection