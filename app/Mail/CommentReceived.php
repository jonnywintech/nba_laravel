<?php

namespace App\Mail;

use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CommentReceived extends Mailable
{
    use Queueable, SerializesModels;

    private $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Comment $comment)
  {
    $this->comment = $comment;
  }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
  {
    return $this->view('email.comment-received')->with([
      'comment' => $this->comment->content,
      'team' => $this->comment->team->name,
      'user' => $this->comment->user->name,
    ]);
}
}
