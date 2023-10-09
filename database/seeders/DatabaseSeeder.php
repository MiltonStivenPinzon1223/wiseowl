<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Group;
use App\Models\Language;
use App\Models\Project;
use App\Models\Publication;
use App\Models\Recommendation;
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
        User::factory(20)->create();
        Language::factory(5)->create();
        Rol::factory()->create(['name' => 'Administrator',]);
        Rol::factory()->create(['name' => 'Developer',]);
        Team::factory(10)->create();
        Group::factory(20)->create();
        Project::factory(10)->create();
        Publication::factory(50)->create();
        Comment::factory(30)->create();
        Recommendation::factory(30)->create();
    }
}
