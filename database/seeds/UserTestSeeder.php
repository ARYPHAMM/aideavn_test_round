<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_tests')->insert(
            [
                ['user_id' => 5, 'subject_id' => 1, 'class_id' => 1, 'points' => 7, 'coefficient' => 1, 'semester' => 1],
                ['user_id' => 5, 'subject_id' => 1, 'class_id' => 1, 'points' => 9, 'coefficient' => 1, 'semester' => 1],
                ['user_id' => 5, 'subject_id' => 1, 'class_id' => 1, 'points' => 8, 'coefficient' => 1, 'semester' => 1],
                ['user_id' => 5, 'subject_id' => 1, 'class_id' => 1, 'points' => 8, 'coefficient' => 1, 'semester' => 1],
                ['user_id' => 5, 'subject_id' => 1, 'class_id' => 1, 'points' => 8, 'coefficient' => 2, 'semester' => 1],
                ['user_id' => 5, 'subject_id' => 1, 'class_id' => 1, 'points' => 8.5, 'coefficient' => 3, 'semester' => 1], // học kì 1
                ['user_id' => 5, 'subject_id' => 2, 'class_id' => 1, 'points' => 7, 'coefficient' => 1, 'semester' => 2],
                ['user_id' => 5, 'subject_id' => 2, 'class_id' => 1, 'points' => 9, 'coefficient' => 1, 'semester' => 2],
                ['user_id' => 5, 'subject_id' => 2, 'class_id' => 1, 'points' => 8, 'coefficient' => 1, 'semester' => 2],
                ['user_id' => 5, 'subject_id' => 2, 'class_id' => 1, 'points' => 8, 'coefficient' => 1, 'semester' => 2],
                ['user_id' => 5, 'subject_id' => 2, 'class_id' => 1, 'points' => 8, 'coefficient' => 2, 'semester' => 2],
                ['user_id' => 5, 'subject_id' => 2, 'class_id' => 1, 'points' => 8.5, 'coefficient' => 3, 'semester' => 2], // học kì 2
            ]
        );
    }
}
