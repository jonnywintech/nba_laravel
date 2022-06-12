<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store($id)
    {
        $user = User::findOrFail($id);
        $user->is_verified = true;
        $user->email_verified_at = now();
        $user->save();
        return redirect('/login');
    }
}
