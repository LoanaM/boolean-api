<?php

use Illuminate\Database\Seeder;
use App\Student;
use App\Course;
use Faker\Generator as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 80; $i++)
        {
          $gender = rand(0,1);

          if ($gender==0) {
            $newStudentArray = [
              'course_id' => Course::inRandomOrder()->first()->id,
              'firstname' => $faker->firstNameMale,
              'lastname' => $faker->lastname,
              'age' => rand(15,35),
              'address' => $faker->address,
              'gender' => 'male',
            ];
          }
          else {
            $newStudentArray = [
              'course_id' => Course::inRandomOrder()->first()->id,
              'firstname' => $faker->firstnameFemale,
              'lastname' => $faker->lastname,
              'age' => rand(15,35),
              'address' => $faker->address,
              'gender' => 'female',
            ];
          }

          $newStudent = new Student;
          $newStudent->fill($newStudentArray);
          $newStudent->save();
        }

    }
}
