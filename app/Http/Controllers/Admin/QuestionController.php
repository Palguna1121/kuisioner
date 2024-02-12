<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;

class QuestionController extends Controller
{
    /**
     * Menampilkan daftar pertanyaan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('admin.questions.index', compact('questions'));
    }

    /**
     * Menampilkan formulir untuk membuat pertanyaan baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questions.create');
    }

    /**
     * Menyimpan pertanyaan baru ke dalam basis data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question_text' => 'required|string|max:255',
        ]);

        Question::create([
            'question_text' => $request->question_text,
        ]);

        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil ditambahkan.');
    }

    /**
     * Untuk melihat detail pertanyaan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showAnswers(Question $question)
    {
        $answers = $question->answers()->paginate(10);
        return view('admin.answers.index', compact('question', 'answers'));
    }

    /**
     * Menampilkan formulir untuk mengedit pertanyaan.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('admin.questions.edit', compact('question'));
    }

    /**
     * Memperbarui pertanyaan yang ada di basis data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'question_text' => 'required|string|max:255',
        ]);

        $question = Question::findOrFail($id);
        $question->update([
            'question_text' => $request->question_text,
        ]);

        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil diperbarui.');
    }

    /**
     * Menghapus pertanyaan dari basis data.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil dihapus.');
    }
}
