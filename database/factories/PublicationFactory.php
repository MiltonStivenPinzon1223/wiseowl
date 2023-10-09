<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class PublicationFactory extends Factory
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
            'id_projects' => $faker->randomElement(DB::table('projects')->pluck('id')),
            'id_users' => $faker->randomElement(DB::table('users')->pluck('id')),
        ];
    }
}
