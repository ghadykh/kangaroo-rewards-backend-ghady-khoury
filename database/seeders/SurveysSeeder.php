<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('surveys')->insert([
            [
                'code' => 'XX1',
                'name' => 'Paris',
            ],
            [
                'code' => 'XX2',
                'name' => 'Chartres',
            ],
            [
                'code' => 'XX3',
                'name' => 'Melun',
            ],
        ]);
    }
}
