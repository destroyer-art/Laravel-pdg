<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AvailblepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('availableps')->insert([
            [
                'policy' => '12345670',
                'plan_reference' => 'The Calpe RBS No. 247',
                'first_name' => 'Martin',
                'last_name' => 'Terence',
                'investment_house' => 'Old Mutual International',
            ],
            [
                'policy' => '12345671',
                'plan_reference' => 'The Calpe RBS No. 248',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'investment_house' => 'Old Mutual International',
            ],
            [
                'policy' => '12345672',
                'plan_reference' => 'The Calpe RBS No. 249',
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'investment_house' => 'Old Mutual International',
            ],
            [
                'policy' => '12345674',
                'plan_reference' => 'The Calpe RBS No. 219',
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'investment_house' => 'Old Mutual International',
            ],
            [
                'policy' => '12345673',
                'plan_reference' => 'The Calpe RBS No. 229',
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'investment_house' => 'Old Mutual International',
            ],
        ]);
    }
}
