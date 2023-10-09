<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class AcceptancesFactory extends Factory
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
            'status' => '1',
            'id_solicitudes' => $faker->randomElement(DB::table('solicitudes')->pluck('id')),
            'id_users' => $faker->randomElement(DB::table('users')->pluck('id')),
        ];
    }
}
