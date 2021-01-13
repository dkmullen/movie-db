<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randYear = rand(1939, 2020);
        return [
          'user_id' => User::factory(), // creates a new user with each article
          'title' => $this->faker->sentence,
          'year' => $randYear,
          'comments' => $this->faker->sentence
        ];
    }
}
