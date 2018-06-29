<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use Faker\Generator as Faker; //importo da db/factories

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $randomGend = ['male','female'];
        for ($i=0; $i < 7; $i++) {
          $gender = $randomGend[array_rand($randomGend)];

          $newTeach = [
            'firstname' => $faker->firstName($gender),
            'lastname' => $faker->lastname,
            'age' => rand(25,55),
            'address' => $faker->address,
            'gender' => $gender,
          ];

          $newTeacher = new Teacher;
          $newTeacher->fill($newTeach);
          $newTeacher->save();
        }
    }
}
