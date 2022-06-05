<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Team;
use App\Models\Player;
use Illuminate\Database\Seeder;
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
            'first_name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        Team::factory(10)->create();
        Player::factory(100)->create();
        Comment::factory(100)->create();


    }
}
