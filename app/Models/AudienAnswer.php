<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudienAnswer extends Model
{
    use HasFactory;
    
    protected $table = 'audien_answers';

    protected $fillable = [
        'nama',
        'email',
        'usia',
        'jenis_kelamin',
        'tingkat_pendidikan',
        'masa_kerja',
    ];

    // Relasi jika diperlukan
    public function response()
    {
        return $this->hasOne(Responses::class, 'email', 'email');
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function audien()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
