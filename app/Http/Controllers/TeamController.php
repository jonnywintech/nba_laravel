<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index()
    {
      $teams = Team::all();
      return view('teams', compact('teams'));
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
        $players = $team->players;
        $comments = $team->comments;
        return view('team', compact('team', 'players', 'comments'));
    }


}
