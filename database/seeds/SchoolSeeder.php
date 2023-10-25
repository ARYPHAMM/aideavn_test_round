<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert(
            [
                ['id' => 1, 'user_id' => 1, 'name' => "Trường tiểu học", "max_year" => 5, 'level' => 1],
                ['id' => 2, 'user_id' => 2, 'name' => "Trường cấp 2", "max_year" => 4, 'level' => 2]
            ]
        );
    }
}
