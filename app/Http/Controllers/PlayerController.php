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
        return view('player', compact('player','team'));
    }

}
