<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_teams');
    }

 protected $guarded = [];
}
