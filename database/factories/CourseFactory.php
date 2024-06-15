<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->name(),
            'duration'=> fake()->word(),
            'max_student'=> fake()->randomNumber(), // returns an integer
            'description'=> fake()->text(),
            'preview'=> fake()->text(),
            'previewImage'=> fake()->image("public/storage/courses", 640, 520, null, false),
            'price'=> fake()->randomNumber(),
            'start_date'=> fake()->date('Y.m.d'),
            'end_date'=> fake()->date('Y.m.d')
        ];
    }
}
