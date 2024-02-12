<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use App\Models\Answer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the answers for a specific question.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        $answers = $question->answers()->paginate(10);
        return view('admin.answers.index', compact('question', 'answers'));
    }

    /**
     * Show the form for creating a new answer.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function create(Question $question)
    {
        return view('admin.answers.create', compact('question'));
    }

    /**
     * Store a newly created answer in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Question $question)
    {
        $request->validate([
            'answer_text' => 'required|string|max:255',
        ]);

        $question->answers()->create([
            'answer_text' => $request->input('answer_text'),
        ]);

        return redirect()->route('admin.questions.answers.index', $question)
            ->with('success', 'Answer created successfully.');
    }

    public function edit($id)
    {
        // Logika untuk menampilkan form edit jawaban
    }

    public function update(Request $request, $id)
    {
        // Logika untuk menyimpan perubahan pada jawaban
    }

    public function destroy($id)
    {
        // Logika untuk menghapus jawaban
    }
}
