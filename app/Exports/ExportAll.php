<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\AudienAnswer;

class ExportAll implements FromCollection, WithHeadings
{
    protected $AudienAnswer;

    public function __construct($AudienAnswer)
    {
        $this->AudienAnswer = $AudienAnswer;
    }

    public function collection()
    {
        $audienAnswers = AudienAnswer::all();

        // Mengatur struktur data yang sesuai
        $formattedData = $audienAnswers->map(function ($item) {
            return [
                'Email' => $item->email,
                'Nama' => $item->nama,
                'Usia' => $item->usia,
                'Jenis Kelamin' => $item->jenis_kelamin,
                'Tingkat Pendidikan' => $item->tingkat_pendidikan,
                'Masa Kerja' => $item->masa_kerja,
            ];
        });
    
        return $formattedData;
    }

    public function headings(): array
    {
        return [
            'Email',
            'Nama',
            'Usia',
            'Jenis Kelamin',
            'Tingkat Pendidikan',
            'Masa Kerja'
        ];
    }
}
