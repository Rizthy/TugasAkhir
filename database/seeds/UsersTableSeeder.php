<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'full_name'  => 'Apriana Irawati',
            'email'      => 'apriana29@gmail.com',
            'username'   => 'admin',
            'password'   => bcrypt('admin'),
            'avatar'     => 'anna.jpeg',
        ]);
    }
}
