<?php

use Illuminate\Database\Seeder;
use App\Student;
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
        for ($i=0; $i < 30; $i++)
        {
          $gender = rand(0,1);

          if ($gender==0) {
            $newStudent = [
              'firstname' => $faker->firstNameMale,
              'lastname' => $faker->lastname,
              'age' => 'sfdffd',
              'address' => 'sfdffd',
              'gender' => 'sfdffd',
            ];
          }
          else {
            $newStudent = [
              'firstname' => $faker->firstnameFemale,
              'lastname' => $faker->lastname,
              'age' => 'sfdffd',
              'address' => 'sfdffd',
              'gender' => 'sfdffd',
            ];
          }

          dd($newStudent);
        }

    }
}
