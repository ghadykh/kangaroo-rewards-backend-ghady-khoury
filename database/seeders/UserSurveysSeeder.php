<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSurveysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_surveys')->insert([
            [
                'user_id' => 1,
                'survey_id' => 1,
            ],
            [
                'user_id' => 1,
                'survey_id' => 2,
            ],
            [
                'user_id' => 2,
                'survey_id' => 2,
            ],
            [
                'user_id' => 2,
                'survey_id' => 1,
            ],
            [
                'user_id' => 3,
                'survey_id' => 1,
            ],
            [
                'user_id' => 4,
                'survey_id' => 1,
            ],
            [
                'user_id' => 5,
                'survey_id' => 2,
            ],
            [
                'user_id' => 5,
                'survey_id' => 1,
            ],
            [
                'user_id' => 1,
                'survey_id' => 3,
            ],
            [
                'user_id' => 3,
                'survey_id' => 2,
            ],
            [
                'user_id' => 2,
                'survey_id' => 3,
            ],
            [
                'user_id' => 3,
                'survey_id' => 3,
            ],
            [
                'user_id' => 4,
                'survey_id' => 3,
            ],
            [
                'user_id' => 4,
                'survey_id' => 2,
            ],
            [
                'user_id' => 6,
                'survey_id' => 2,
            ],
        ]);
    }
}
