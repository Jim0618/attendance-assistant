<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            ['student_id' => '1', 'password' => '123'],
            ['student_id' => '2', 'age' => '344'],
            ['student_id' => '3', 'password' => '123'],
            ['student_id' => '4', 'age' => '344'],
            ['student_id' => '5', 'password' => '123'],
            ['student_id' => '6', 'age' => '344'],
            ['student_id' => '7', 'password' => '123'],
            ['student_id' => '8', 'age' => '344'],
        ]);
    }
}
