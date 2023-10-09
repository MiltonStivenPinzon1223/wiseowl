<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CommentFactory extends Factory
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
            'comment' => $faker->text(),
            'id_publications' => $faker->randomElement(DB::table('publications')->pluck('id')),
            'id_users' => $faker->randomElement(DB::table('users')->pluck('id')),
        ];
    }
}
