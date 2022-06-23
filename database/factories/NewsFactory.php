<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *
     *
     * @return array<string, mixed>
     */

    protected $model = News::class;
    public function definition()
    {
        return [
            'title' => $this->faker->realTextBetween($minNbChars = 7, $maxNbChars = 20, $indexSize = 2),
            'content' => $this->faker->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2),
            'user_id' => User::inRandomOrder()->select('id')->first()
        ];
    }
}
