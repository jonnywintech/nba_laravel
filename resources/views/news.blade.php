@extends('layout.home')
@section('title', 'News')

@section('content')
<div class="container col-sm-12 col-md-6  mx-auto px-2">
<h1 class="my-4">List of All News</h1>

<div class="container-fluid">
    @foreach ($news as $new)

    <div><a href="/news/{{$new->id}}" class="list-group-item list-group-item-action">{{$new->title}}</a></div>
    <p class="text">{{$new->content}}</p>
    @endforeach
</div>
</div>
<div class="container col-sm-12 col-md-6  mx-auto px-2">
    {{$news->links()}}
</div>

@endsection
