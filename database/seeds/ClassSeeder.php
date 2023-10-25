<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert(
            [
                ['id' => 1, 'name' => "Lớp 1 (1-2055)", "user_id" => 3, "school_id" => 1,'year'=>2015],
                ['id' => 2, 'name' => "Lớp 2 (2-2056)", "user_id" => 4, "school_id" => 1,'year'=>2015],
            ]
        );
    }
}
