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

        $students = [
          [
            'firstname' => 'sfdffd',
            'lastname' => 'ssff',
            'age' => 'sfdffd',
            'address' => 'sfdffd',
            'gender' => 'sfdffd'
          ],
          [
            'firstname' => 'bbbbbbb',
            'lastname' => 'bbbbbbb',
            'age' => '14',
            'address' => 'bbbbbbb',
            'gender' => 'bbbbbbb'
          ]
        ];

        foreach ($students as $student) {
          $newStudent = new Student();
          $newStudent->fill($student);

          $newStudent->save();
        }
    }
}
