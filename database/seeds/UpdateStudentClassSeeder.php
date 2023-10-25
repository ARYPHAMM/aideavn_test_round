<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateStudentClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->where('user_id', 5)->update(['class_id' => 1]);
    }
}
