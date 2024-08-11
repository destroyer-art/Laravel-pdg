<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Shinji',
            'email' => 'nshinji65@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'accept' => 'true',
            'lastoperation' => ''
        ]);
    }
}
