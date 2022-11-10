<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admin\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Course::class;

    public function definition()
    {
        return [
            'coursename' => $this->faker->name,
            'price' => $this->faker->randomDigit,
            'credit' => $this->faker->randomDigit,
            'type' => 'Compulsory',
            'duration' => $this->faker->randomDigit,
            'requirement' => 'Desktop / Laptop',
            'description' => $this->faker->sentence,
        ];
    }
}
