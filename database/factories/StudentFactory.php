<?php

namespace Database\Factories;

use App\Models\Faculty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
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
            //
            'student_code' => 'STU-' . $this->faker->unique()->numberBetween(1000, 9999),

            'name' => $this->faker->name(),

            'email' => $this->faker->unique()->safeEmail(),

            'semester' => $this->faker->numberBetween(1, 12),

            'status' => $this->faker->randomElement(['active', 'inactive']),

//aqui estamos tomando un id de las Facultades creadas, que se toman del listado que le dimos, para que no se repitan
            'faculty_id' => Faculty::query()->inRandomOrder()->value('id'),

        ];
    }
}