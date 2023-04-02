<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SurveyQuestion extends Model
{
    use HasFactory;

    /**
     * Get the options for the question.
     */
    public function options(): HasMany
    {
        return $this->hasMany(SurveyQuestionOption::class);
    }
}
