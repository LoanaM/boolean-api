<?php

use Illuminate\Database\Seeder;
use App\Course;
use App\Teacher;
use Faker\Generator as Faker;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {

        $newCourseArray = [
          'teacher_id' => Teacher::inRandomOrder()->first()->id,
          'coursename' => $faker->jobTitle,
          'start_date' => $faker->dateTime,
          'end_date' => $faker->dateTime,
        ];+

        $newCourse = new Course;
        $newCourse->fill($newCourseArray);
        $newCourse->save();
      }
    }
}
