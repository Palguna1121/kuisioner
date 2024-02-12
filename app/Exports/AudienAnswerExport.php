<?php

namespace App\Exports;

use App\Models\AudienAnswer;
use App\Models\Question;
use App\Models\Responses;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AudienAnswerExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $audienAnswers = AudienAnswer::all();

        $data = $audienAnswers->map(function ($audienAnswer) {
            $rowData = [
                'Email Address' => $audienAnswer->email,
                'Nama' => $audienAnswer->nama,
                'Usia' => $audienAnswer->usia,
                'Jenis Kelamin' => $audienAnswer->jenis_kelamin,
                'Tingkat Pendidikan' => $audienAnswer->tingkat_pendidikan,
                'Masa Kerja' => $audienAnswer->masa_kerja,
            ];

            $responses = Responses::where('email', $audienAnswer->email)->get();

            $questions = Question::all();

            foreach ($questions as $question) {
                $response = $responses->where('question_id', $question->id)->first();
                if ($response) {
                    $rowData[$question->question_text] = $response->answer->answer_text;
                } else {
                    $rowData[$question->question_text] = ''; // Jika tidak ada jawaban, biarkan kosong
                }
            }

            return $rowData;
        });

        return $data;
    }

    public function headings(): array
    {
        $headings = [
            'Email Address',
            'Nama',
            'Usia',
            'Jenis Kelamin',
            'Tingkat Pendidikan',
            'Masa Kerja',
        ];

        $questions = Question::all();

        foreach ($questions as $question) {
            $headings[] = $question->question_text;
        }

        return $headings;
    }
}
