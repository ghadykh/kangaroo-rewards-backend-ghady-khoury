<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveyQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('survey_questions')->insert([
            [
                'survey_id' => 1,
                'type' => 'qcm',
                'label' => 'XX1: What best sellers are available in your store?',
            ],
            [
                'survey_id' => 1,
                'type' => 'numeric',
                'label' => 'XX1: Number of products?',
            ],
            [
                'survey_id' => 2,
                'type' => 'qcm',
                'label' => 'XX2: What best sellers are available in your store?',
            ],
            [
                'survey_id' => 2,
                'type' => 'numeric',
                'label' => 'XX2: Number of products?',
            ],
            [
                'survey_id' => 3,
                'type' => 'qcm',
                'label' => 'XX3: What best sellers are available in your store?',
            ],
            [
                'survey_id' => 3,
                'type' => 'numeric',
                'label' => 'XX3: Number of products?',
            ],
        ]);
    }
}
