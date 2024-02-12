<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\AudienAnswer;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use App\Models\Responses;

class AudienController extends Controller
{
    public function index()
    {
        // Mengambil semua pertanyaan beserta jawabannya
        $questions = Question::with('answers')->get();
        $questionChunks = $this->chunkQuestions($questions);

        // Mengirim data pertanyaan dan jawaban ke tampilan
        return view('audien.index', compact('questions','questionChunks'));
    }

    private function chunkQuestions($questions)
    {
        $questionsArray = $questions->toArray();
        
        $chunks = [
            'Pelatihan' => array_slice($questionsArray, 0, 7),
            'Kompensasi' => array_slice($questionsArray, 7, 5),
            'Pengembangan Karir' => array_slice($questionsArray, 12, 5),
            'Kinerja Karyawan' => array_slice($questionsArray, 17, 6)
        ];

        return $chunks;
    }

    public function storeAnswer(Request $request)
    {
        try {
            // Dapatkan ID dari route model binding jika ada
            $id = Route::input('id');
    
            // Validasi data dari request
            $validatedData = $request->validate([
                'nama' => 'required|string',
                'email' => [
                    'required',
                    'email',
                    Rule::unique('audien_answers')->ignore($id),
                ],
                'usia' => 'required|string',
                'jenis_kelamin' => 'required|string',
                'tingkat_pendidikan' => 'required|string',
                'masa_kerja' => 'required|string',
                'answers' => 'required|array',
            ]);
        } catch (ValidationException $e) {
            // Tangani jika validasi gagal
            if ($e->errors()['email'][0] === 'The email has already been taken.') {
                return response()->json(['message' => 'Email sudah terdaftar.'], 422);
            } else {
                return response()->json(['message' => 'Ada kesalahan dalam pengiriman data.'], 422);
            }
        }

        //simpan ke audien_answer terlebih dahulu
        AudienAnswer::create([
            'nama' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'usia' => $validatedData['usia'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'tingkat_pendidikan' => $validatedData['tingkat_pendidikan'],
            'masa_kerja' => $validatedData['masa_kerja'],
        ]);


        //simpan jawaban ke responses
        $answers = $validatedData['answers'];
        foreach ($answers as $questionId => $answerId) {
            Responses::create([
                'email' => $validatedData['email'],
                'question_id' => $questionId,
                'answer_id' => $answerId,
            ]);
        }

        return response()->json(['message' => 'Jawaban berhasil disimpan'], 200);
    }

    public function done()
    {
        return view('audien.done');
    }

}
