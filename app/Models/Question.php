<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = ['question_text'];

    // Relasi jika diperlukan

    public function responses()
    {
        return $this->hasMany(Responses::class);
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function audienAnswers()
    {
        return $this->belongsToMany(AudienAnswer::class, 'audien_question_answers', 'question_id', 'answer_id');
    }

    public function chartData()
    {
        $chartData = [];

        // Iterate through each answer of the question
        foreach ($this->answers as $answer) {
            // Count the responses for each answer
            $responseCount = $this->responses->where('answer_id', $answer->id)->count();
            // Push the count to the chart data array
            $chartData[] = $responseCount;
        }

        return $chartData;
    }

    public function chartLabels()
    {
        $chartLabels = [];

        // Iterate through each answer of the question
        foreach ($this->answers as $answer) {
            // Push the answer text to the chart labels array
            $chartLabels[] = $answer->answer_text;
        }

        return $chartLabels;
    }
}
