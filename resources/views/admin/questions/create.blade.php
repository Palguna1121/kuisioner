@extends('admin.layouts.main')

@section('content')
    <h1>Tambah Pertanyaan</h1>

    <form action="{{ route('admin.questions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="question_text" class="form-label">Pertanyaan</label>
            <input type="text" class="form-control" id="question_text" name="question_text" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
