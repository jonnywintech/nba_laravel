<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Team;
use App\Models\User;
use App\Models\Player;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'first_name' => 'Pera',
            'last_name' => 'Peric',
            'email' => 'pera@p.com',
            'password' => Hash::make('password'),
            'is_verified' => true,
        ]);

        Team::factory(10)->create();
        Player::factory(100)->create();
        Comment::factory(100)->create();
        News::factory(100)->create();

        foreach (Team::all() as $team) {
            $news = \App\Models\News::inRandomOrder()->take(rand(1, 100))->pluck('id');
            $team->news()->attach($news);
        }
    }
}
