<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_survey_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_survey_id');
            $table->unsignedBigInteger('survey_question_id');
            $table->unsignedBigInteger('survey_question_option_id')->nullable();
            $table->integer('value_integer')->nullable();
            $table->boolean('value_boolean')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('user_survey_id')->references('id')->on('user_surveys');
            $table->foreign('survey_question_id')->references('id')->on('survey_questions');
            $table->foreign('survey_question_option_id')->references('id')->on('survey_question_options');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_survey_answers');
    }
};
