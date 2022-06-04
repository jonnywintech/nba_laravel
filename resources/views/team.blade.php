@extends('layout.home')
@section('title', 'Teams')

@section('content')
<div class="container mx-auto px-2">
    <h1 class="my-2">{{ $team->name }}</h1>
    <h2 class="my-2">{{ $team->email }}</h2>
    <h3 class="my-2">{{ $team->address }}, {{ $team->city }}</h3>
<h4>List of All Players</h4>


<div class="list-group">
    @foreach ($players as $player)
    <a  href="/player/{{$player->id}}" class="list-group-item list-group-item-action py-2 mb-2">{{$player->first_name}}, {{$player->last_name}}</a>
    @endforeach
</div>
</div>


@endsection
