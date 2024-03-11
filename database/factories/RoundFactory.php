<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Round>
 */
class RoundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'dayTime' => Str::random(5), 
            'WhoDie' => User::inRandomOrder()->first()->id,
            'HowDie' => Str::random(5),
            'Count' => random_int(1,10),
        ];
    }
}
