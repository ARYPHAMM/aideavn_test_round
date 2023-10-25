<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_password = Hash::make('123456');
        DB::table('users')->insert(
            [
                ['id' => 1, 'email' => 'hieutruong1@aideavn.com', 'password' => $default_password, 'account_type' => 'principal'],
                ['id' => 2, 'email' => 'hieutruong2@aideavn.com', 'password' => $default_password, 'account_type' => 'principal']
            ]
        );
        DB::table('users')->insert(
            [
                ['id' => 3, 'email' => 'giaovien1@aideavn.com', 'password' => $default_password, 'account_type' => 'teacher'],
                ['id' => 4, 'email' => 'giaovien2@aideavn.com', 'password' => $default_password, 'account_type' => 'teacher']
            ]
        );
        DB::table('users')->insert(
            [
                ['id' => 5, 'email' => 'hocsinh1@aideavn.com', 'password' => $default_password, 'account_type' => 'student'],
                ['id' => 6, 'email' => 'hocsinh2@aideavn.com', 'password' => $default_password, 'account_type' => 'student']
            ]
        );
        DB::table('students')->insert(
            [
                ['id' => 1, 'user_id' => '5', 'first_name' => "1", 'last_name' => 'hoc sinh'],
                ['id' => 2, 'user_id' => '6', 'first_name' => "2", 'last_name' => 'hoc sinh']
            ]
        );
    }
}
