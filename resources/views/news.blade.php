@extends('layout.home')
@section('title', 'News')



@section('content')
<div class="container">
    <h2>News</h2>
<div>
    @foreach ($allNews as $news)
    <div>
        <a href="{{ route('news.show', ['news' => $news]) }}">{{$news->title}}, {{$news->user->name}}</a>
    </div>
    @endforeach
    <br />
    {{$allNews->links()}}
</div>
</div>
@endsection
