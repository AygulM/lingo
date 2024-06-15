<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
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
            'photo'=> fake()->image("public/storage/students", 640, 520, null, false),
            'birthday'=> fake()->date('Y.m.d')
        ];
    }
}
