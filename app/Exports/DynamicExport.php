<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DynamicExport implements FromCollection, WithHeadings
{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function collection()
    {
        // Mendapatkan nama field dari model menggunakan refleksi
        $fields = collect($this->model->getFillable());

        // Mengambil data dari model sesuai dengan field yang ada
        $data = $this->model->get();

        // Mengatur struktur data yang sesuai dengan nama field
        $formattedData = $data->map(function ($item) use ($fields) {
            return $fields->map(function ($field) use ($item) {
                return $item->$field;
            });
        });

        // Mengembalikan data yang telah diformat
        return $formattedData;
    }

    public function headings(): array
    {
        // Mendapatkan nama field dari model menggunakan refleksi
        return collect($this->model->getFillable())->toArray();
    }
}
