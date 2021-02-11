<?php

namespace Database\Seeders;

use App\Models\Projects;
use Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker\Generator $faker)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('projects')->truncate();

        for ($i = 0; $i < 50; $i++) {
            $title = $faker->sentence(2);
            $project = Projects::create([
                'project_title' => Str::title($title),
                'slug' => Str::slug($title),
                'project_description' => $faker->sentence(20),
            ]);

            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        }
    }
}

