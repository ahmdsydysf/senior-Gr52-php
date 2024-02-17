<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word() ,
            'project_id' => Project::inrandomOrder()->first()->id
            // 'email' => fake()->unique()->email() ,
            // 'password' => fake()->password(3, 16) ,
            // 'is_active' => fake()->boolean(10) ,
            // 'first_name' => fake()->firstName() ,
            // 'image' => fake()->imageUrl() ,
            // 'description' => fake()->realText() ,
            // 'count' => fake()->numberBetween(1, 180) ,
            // 'join_at' => fake()->dateTimeThisYear() ,
            // 'emoji' => fake()->emoji() ,
            // 'blood_type' => fake()->bloodType() ,
        ];
    }
}
