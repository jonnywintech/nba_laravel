@extends('layout.home')
@section('title', 'News')



@section('content')
<div class="container">
    <h2>News</h2>
<div class="row">
    <div class="col-8">
            @foreach ($allNews as $news)
            <div>
                <a href="{{ route('news.show', ['news' => $news]) }}">{{$news->title}}, {{$news->user->name}}</a>
            </div>
            @endforeach
            <br />
            {{$allNews->links()}}
        </div>
        <div class="col-4">
            @include('partials.sidebar')
        </div>
    </div>
</div>
@endsection
