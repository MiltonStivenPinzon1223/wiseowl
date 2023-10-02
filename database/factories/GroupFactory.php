<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class GroupFactory extends Factory
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
            'id_teams' => $faker->randomElement(DB::table('teams')->pluck('id')),
            'id_users' => $faker->randomElement(DB::table('users')->pluck('id')),
            'id_rols' => $faker->randomElement(DB::table('rols')->pluck('id')),
        ];
    }
}
