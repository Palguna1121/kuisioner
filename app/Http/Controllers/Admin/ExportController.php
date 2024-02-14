<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExportAll;
use App\Models\AudienAnswer;
use Illuminate\Http\Request;
use App\Exports\AudienAnswerExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportData()
    {
        // Mengambil data dari model AudienAnswer
        $audienAnswers = AudienAnswer::all();

        // Membuat instance dari class export dengan menyertakan data AudienAnswer
        $export = new ExportAll($audienAnswers);

        // Menjalankan ekspor data
        return Excel::download($export, 'audien_all.xlsx');
    }

    public function exportAudienAnswers()
    {
        return Excel::download(new AudienAnswerExport(), 'response.xlsx');
    }
}
