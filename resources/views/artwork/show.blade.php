@extends('layout')

@section('artwork')
<div class="artwork">
    <img class="artwork-image" src="{{ $artwork->url }}" />
    <h4 class="artwork-title">{{$artwork->title}}</h4>
</div>
@auth
<div class="admin-delete-button">
    <button>Delete</button>
</div>
@endauth
@endsection