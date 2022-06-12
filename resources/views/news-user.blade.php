@extends('layout.home')
@section('title', 'News')

@section('content')
<div class="container col-8 col-sm-12 mx-auto px-2">
<h1 class="my-4">List of All News</h1>

<div class="container-fluid">
    <div><a href="/team/{{$news->id}}" class="list-group-item list-group-item-action">{{$news->title}}</a></div>
    <p class="text">{{$news->content}}</p>
</div>
<div class="user">
    <h4>Creator</h4>
    <h5>{{$user->first_name}} {{$user->last_name}}</h5>
    <h6>{{$user->email}}</h6>

</div>
</div>

@endsection
