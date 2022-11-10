<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Course;
// use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     $faker = Faker::create();
    //     // $course = new Course;
    //     // $course->coursename = "Python";
    //     // $course->price = "20";
    //     // $course->credit = "3";
    //     // $course->type = "Compulsory";
    //     // $course->duration = "2";
    //     // $course->requirement = "Desktop / Laptop";
    //     // $course->description = "description descriptiondescriptiondescription description description.";

    // // for($i =1; $i<=100; $i++){}

    //     Course::insert([
    //         'coursename' => $faker ->name,
    //         'price' => $faker ->price,
    //         'credit' => $faker ->credit,
    //         'type' => 'Compulsory',
    //         'duration' => $faker ->duration,
    //         'requirement' => 'Desktop / Laptop',
    //         'description' => $faker -> description,
    //     ]);

    Course::factory()->count(100)->create();

    }
}
