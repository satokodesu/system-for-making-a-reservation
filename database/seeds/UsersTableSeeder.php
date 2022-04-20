<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
        'id' => 1,
        'name' => '県立花子',
        'number' => '2022gp001',
        'email' => 'hanako-gcv@yamanashi-ken.ac.jp',
        'password' => bcrypt("kenritu2021"),
        ]);
    }
}
