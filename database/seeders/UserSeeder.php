<?php

namespace Database\Seeders;

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
        DB::table('users')->insertOrIgnore([[
            'name' => 'user',
            'login' => 'user',
            'password' => Hash::make('user'),
        ], [
            'name' => 'admin',
            'login' => 'admin',
            'password' => Hash::make('admin'),
        ]]);
    }
}
