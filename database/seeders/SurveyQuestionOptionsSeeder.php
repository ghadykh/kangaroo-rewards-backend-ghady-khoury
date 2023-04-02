<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveyQuestionOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('survey_question_options')->insert([
            [
                'survey_question_id' => 1,
                'label' => 'XX1 Product 1',
            ],
            [
                'survey_question_id' => 1,
                'label' => 'XX1 Product 2',
            ],
            [
                'survey_question_id' => 1,
                'label' => 'XX1 Product 3',
            ],
            [
                'survey_question_id' => 1,
                'label' => 'XX1 Product 4',
            ],
            [
                'survey_question_id' => 1,
                'label' => 'XX1 Product 5',
            ],
            [
                'survey_question_id' => 1,
                'label' => 'XX1 Product 6',
            ],
            [
                'survey_question_id' => 3,
                'label' => 'XX2 Product 1',
            ],
            [
                'survey_question_id' => 3,
                'label' => 'XX2 Product 2',
            ],
            [
                'survey_question_id' => 3,
                'label' => 'XX2 Product 3',
            ],
            [
                'survey_question_id' => 3,
                'label' => 'XX2 Product 4',
            ],
            [
                'survey_question_id' => 3,
                'label' => 'XX2 Product 5',
            ],
            [
                'survey_question_id' => 3,
                'label' => 'XX2 Product 6',
            ],
            [
                'survey_question_id' => 5,
                'label' => 'XX3 Product 1',
            ],
            [
                'survey_question_id' => 5,
                'label' => 'XX3 Product 2',
            ],
            [
                'survey_question_id' => 5,
                'label' => 'XX3 Product 3',
            ],
            [
                'survey_question_id' => 5,
                'label' => 'XX3 Product 4',
            ],
            [
                'survey_question_id' => 5,
                'label' => 'XX3 Product 5',
            ],
            [
                'survey_question_id' => 5,
                'label' => 'XX3 Product 6',
            ],
        ]);
    }
}
