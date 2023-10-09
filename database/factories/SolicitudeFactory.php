<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class SolicitudeFactory extends Factory
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
            'name' => $faker->name(),
            'id_users' => $faker->randomElement(DB::table('users')->pluck('id')),
            'id_groups' => $faker->randomElement(DB::table('groups')->pluck('id')),
        ];
    }
}
