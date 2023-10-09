<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ProjectFactory extends Factory
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
            'description' => $faker->text(),
            'status' => '1',
            'id_languages' => $faker->randomElement(DB::table('languages')->pluck('id')),
            'id_teams' => $faker->randomElement(DB::table('teams')->pluck('id')),
        ];
    }
}
