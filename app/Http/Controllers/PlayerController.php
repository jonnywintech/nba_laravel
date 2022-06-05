<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show($id)
    {
        $player = Player::findOrFail($id);
        $team= $player->team;
        $team->load('comments.user');
        return view('player', compact('player','team'));
    }

}
