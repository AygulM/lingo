<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fname'=> fake()->name(),
            'lname'=> fake()->name(),
            'phone'=> fake()->string(),//?
            'about'=> fake()->text(),
            'city'=> fake()->word(),
            'practice'=> fake()->string(),
            'education'=> fake()->text(),
            'photo'=> fake()->image("public/storage/teachers", 640, 520, null, false),
            'vk'=> fake()->string(),
            'telegram'=> fake()->string(),
            'whatsapp'=> fake()->string(),
        ];
    }
}
