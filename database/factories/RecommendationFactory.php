<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class RecommendationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            'recommendation' => $faker->text(),
            'id_users' => $faker->randomElement(DB::table('users')->pluck('id')),
        ];
    }
}
