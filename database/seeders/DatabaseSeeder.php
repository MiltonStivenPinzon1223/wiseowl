<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Language;
use App\Models\Project;
use App\Models\Publication;
use App\Models\Rol;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Language::factory(10)->create();
        Rol::factory()->create(['name' => 'Administrator',]);
        Rol::factory()->create(['name' => 'Developer',]);
        Team::factory(10)->create();
        Group::factory(10)->create();
        Project::factory(10)->create();
        Publication::factory(10)->create();
    }
}
