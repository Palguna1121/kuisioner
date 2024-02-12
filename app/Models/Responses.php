<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responses extends Model
{
    protected $table = 'responses';
    
    protected $fillable = ['email', 'question_id', 'answer_id'];

    public function audienAnswer()
    {
        return $this->belongsTo(AudienAnswer::class, 'email', 'email');
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
