@extends('layout')

@section('medium')
    @foreach ($artworks as $work)
    <div class="card">
        <a href="/artwork/{{$work->id}}">
        <img src="{{ $work->url }}" />
        <div class="card-text">
            <h4>{{$work->title}}</h4>
        </div>
        </a>
    </div>
    @endforeach

@endsection