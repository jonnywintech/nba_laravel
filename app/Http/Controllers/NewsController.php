<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::with('user')->paginate(10);

        return view('news', compact('news'));

    }



    public function show($id)
    {
        $news = News::findOrFail($id);
        $user = $news->user;
        // $user= $player->team;
        // $team->load('comments.user');
        return view('news-user', compact('news','user'));
    }
}
