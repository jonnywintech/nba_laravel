@extends('layout.home')
@section('title', 'Teams')

@section('content')
<div class="container mt-5">
<h2>News about {{$team->name}}</h2>
@foreach ($news as $newsArticle)
<div class="py-3">
    <a href="{{ route('news.show', ['news' => $newsArticle->id]) }}">{{$newsArticle->title}}, {{$newsArticle->user->name}}</a>
</div>
@endforeach
{{$news->links()}}
</div>
@endsection
