@extends('layout.home')
@section('title', 'Teams')

@section('content')
<div class="container mx-auto px-2">
    <h1 class="my-2">{{ $player->first_name }} {{ $player->last_name }}</h1>
    <h3 class="my-2">{{ $player->address}}</h3>
    {{-- @dd($team) --}}
<h4>Club</h4>
<br>
<h3><a href="/team/{{$team->id}}">{{$team->name}}</a></h3>



@endsection
