<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Task;
use App\Models\User;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\TaskSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\TaskFactory;
use Database\Seeders\ProfileSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create()->each(function ($user) {
        //     Project::factory(2)->create(['user_id' => $user->id ])
        //         ->each(function ($project) {
        //             Task::factory(3)->create([
        //             'project_id' => $project->id
        //             ]);
        //         });
        // });

        // User::factory(5)->create();
        // Project::factory(5)->create();
        // Task::factory(5)->create();

        User::factory(10)->create()
        ->each(function ($user) {
            Profile::factory(1)->create([
                'user_id' => $user->id
            ]);
        });

        Category::create([
            'name' => 'ملابس',
        ]);
        Category::create([
            'name' => 'اكسيسوار',
        ]);
        Category::create([
            'name' => 'اخري',
        ]);
        //Task::factory(10000)->create();
        //\App\Models\User::factory(10000000)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(UserSeeder::class);
        // $this->call(ProfileSeeder::class);
        //$this->call(TaskSeeder::class);
    }
}
