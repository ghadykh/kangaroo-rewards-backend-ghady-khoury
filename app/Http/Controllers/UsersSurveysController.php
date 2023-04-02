<?php

namespace App\Http\Controllers;

use App\Models\UserSurvey;
use Illuminate\Http\Request;

class UsersSurveysController extends Controller
{
    public function show(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
        ]);

        // Get surveys filled by user with the requested code
        $user_surveys = UserSurvey::select()
            ->whereHas('survey', function ($query) use ($request) {
                $query->where('code', $request->code);
            })
            ->with('user', 'survey.questions.options', 'answers')
            ->get();

        foreach ($user_surveys as $user_survey) {
            // Group answers by question id to easily display it on the frontend
            $user_survey->answers_grouped = collect($user_survey->answers)->groupBy('survey_question_id');

            foreach ($user_survey->answers_grouped as $survey_question_id => $question_answers) {
                // Group answers by option id to easily display it on the frontend
                $user_survey->answers_grouped[$survey_question_id] = collect($question_answers)->keyBy('survey_question_option_id');
            }
        }

        foreach ($user_surveys as $user_survey) {
            foreach ($user_survey->survey->questions as $question) {
                if ($question->type == 'qcm') {
                    foreach ($question->options as $option) {
                        if (!isset($user_survey->answers_grouped[$question->id][$option->id])) {
                            return $user_survey;
                        }
                    }
                }
            }
        }

        return $user_surveys;
    }
}
