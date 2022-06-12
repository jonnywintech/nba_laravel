<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentRequest;
use App\Mail\CommentReceived;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{

    public function __construct()
    {
      $this->middleware(['auth', 'verified']);
    }

    public function store(Team $team, CreateCommentRequest $request)
    {
        $data = $request->validated();

        $comment = new Comment;
        $comment->content = $data['content'];
        $comment->user()->associate(auth()->user());
        $comment->team()->associate($team);
        $comment->save();
        return back();
    }
}
