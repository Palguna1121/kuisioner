<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use App\Models\Responses;
use App\Models\AudienAnswer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\ExportAll;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function index()
    {
        $usiaData = AudienAnswer::selectRaw('usia, COUNT(*) as total')
                                ->groupBy('usia')
                                ->orderBy('usia')
                                ->get();

        $jenisKelaminData = AudienAnswer::selectRaw('jenis_kelamin, COUNT(*) as total')
                                        ->groupBy('jenis_kelamin')
                                        ->get();

        $tingkatPendidikanData = AudienAnswer::selectRaw('tingkat_pendidikan, COUNT(*) as total')
                                            ->groupBy('tingkat_pendidikan')
                                            ->get();

        $masaKerjaData = AudienAnswer::selectRaw('masa_kerja, COUNT(*) as total')
                                    ->groupBy('masa_kerja')
                                    ->get();

        $totalAudiens = AudienAnswer::distinct('email')->count();
        $audiens = AudienAnswer::all();
        $responses = Responses::all();

        return view('admin.dashboard', compact(
            'responses',
            'audiens',
            'totalAudiens',
            'usiaData',
            'jenisKelaminData', 
            'tingkatPendidikanData', 
            'masaKerjaData'
        ));
    }

    // public function exportData()
    // {
    //     // Mengambil data dari model AudienAnswer
    //     $audienAnswers = AudienAnswer::all();

    //     // Membuat instance dari class export dengan menyertakan data AudienAnswer
    //     $export = new ExportAll($audienAnswers);

    //     // Menjalankan ekspor data
    //     return Excel::download($export, 'audien_all.xlsx');
    // }

    public function showGraph()
    {
        $questions = Question::with(['answers', 'responses'])->get();
        $questionChunks = $this->chunkQuestions($questions);

        return view('admin.graph', compact('questions','questionChunks'));
    }

    private function chunkQuestions($questions)
    {
        $questionsArray = $questions->toArray();
        
        $chunks = [
            'Pertanyaan Pelatihan' => array_slice($questionsArray, 0, 7),
            'Pertanyaan Kompensasi' => array_slice($questionsArray, 7, 5),
            'Pertanyaan Pengembangan Karir' => array_slice($questionsArray, 12, 5),
            'Pertanyaan Kinerja Karyawan' => array_slice($questionsArray, 17, 6)
        ];

        return $chunks;
    }
}
