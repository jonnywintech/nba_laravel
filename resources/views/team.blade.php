@extends('layout.home')
@section('title', 'Teams')

@section('content')
<div class="container mx-auto px-2">
    <div class="row">
        <div class="col-8">

    <h1 class="my-2">{{ $team->name }}</h1>
    <h2 class="my-2">{{ $team->email }}</h2>
    <h3 class="my-2">{{ $team->address }}, {{ $team->city }}</h3>
<h4>List of All Players</h4>


<div class="list-group">
    @foreach ($players as $player)
    <a  href="/player/{{$player->id}}" class="list-group-item list-group-item-action py-2 mb-2">{{$player->first_name}}, {{$player->last_name}}</a>
    @endforeach

    {{-- @auth
    <form method="POST" action="{{route('team.comment', ['team'=>$team])}}">
        @csrf
        <div class="form-group">
            <label for="content">Comment</label>
            <textarea name="content" class="form-control" id="content" rows="3" placeholder="Write your comment here..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endauth --}}


    @auth
    <form action="{{route('createComment', ['team' => $team])}}" method="POST">

        @csrf
        <div class="bg-secondary">
            <span class="text-light fs-4 ms-3 py-5">Leave a comment</span>
        </div>


        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form4Example3" name="content" rows="4"></textarea>
          <label class="form-label" for="form4Example3">Message</label>
        </div>



        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Comment</button>
      </form>

    @endauth
</div>
        </div>
        <div class="col-4 pt-3 special">
            <div class="comments">
                <h3>Comments:</h3>
                @foreach($comments as $comment)
                <div>
                    {{-- @dd($comment->user) --}}
                    <h4>{{$comment->user->first_name .' ' . $comment->user->last_name}}:</h4>
                    <blockquote>
                        {{$comment->content}}
                    </blockquote>
                </div>
                @endforeach
            </div>
        </div>



    </div>

</div>


@endsection
