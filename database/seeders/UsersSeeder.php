<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'User 1',
            ],
            [
                'name' => 'User 2',
            ],
            [
                'name' => 'User 3',
            ],
            [
                'name' => 'User 4',
            ],
            [
                'name' => 'User 5',
            ],
            [
                'name' => 'User 6',
            ],
        ]);
    }
}
