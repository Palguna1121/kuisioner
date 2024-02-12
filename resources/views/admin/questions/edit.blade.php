@extends('admin.layouts.main')

@section('content')
    <h1>Edit Pertanyaan</h1>

    <form action="{{ route('admin.questions.update', $question->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="question_text" class="form-label">Pertanyaan</label>
            <input type="text" class="form-control" id="question_text" name="question_text" value="{{ $question->question_text }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
