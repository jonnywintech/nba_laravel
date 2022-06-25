@extends('layout.home')

@section('title', 'Nba News - ' . $news->title)

@section('content')
<div class="container">
    <h2>{{$news->title}}</h2>

<h4>Author: {{$news->user->first_name}}  {{$news->user->last_name}}</h4>
<hr />
<p>{{$news->content}}</p>

<hr />
{{-- {{dd($news->teams())}} --}}
<h3>Teams</h3>
@foreach ($news->teams as $team)
<div>
    <a href="{{route('newsForTeam', ['teamName'=>$team->name])}}">
        {{$team->name}}
    </a>
</div>
@endforeach

</div>
@endsection
