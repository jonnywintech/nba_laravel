@extends('layout.home')
@section('title', 'Register')

@section('content')
<div class="container mx-auto px-2">
<h1 class="my-4 text-center">Register new Account</h1>
<div class="row">
    <div class="col-6 mx-auto">

            <h1>Create a news article: </h1>
            <br>
            <form method="POST" action="/create/news">
                @csrf
                <input type="text" placeholder="Title" name="title" value={{ old('title') }}>
                <br>
                <textarea name="content" placeholder="Write something ..." cols="30" rows="10">
                    {{ old('content') }}
                </textarea>
                <br>
                <div>
                    Select teams:
                    @foreach ($teams as $team)
                        <input type="checkbox" name="teams[]" id="team-{{ $team->id }}" value="{{ $team->id }}">
                        <label for="team-{{ $team->id }}">{{ $team->name }}</label>
                    @endforeach
                </div>
                <br>
                <button type="submit">Submit</button>
            </form>
    </div>
</div>

</div>

@endsection
