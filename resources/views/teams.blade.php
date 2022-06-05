@extends('layout.home')
@section('title', 'Teams')

@section('content')
<div class="container mx-auto px-2">
<h1 class="my-4">List of All Teams</h1>

<div class="list-group">
    @foreach ($teams as $team)

    <a href="/team/{{$team->id}}" class="list-group-item list-group-item-action">{{$team->name}}</a>
    @endforeach
</div>
</div>

@endsection
