<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert(
            [
                ['id' => 1, 'name' => "Toán"],
                ['id' => 2, 'name' => "Tiếng việt"],
                ['id' => 3, 'name' => "Tiếng anh"]
            ]
        );
    }
}
