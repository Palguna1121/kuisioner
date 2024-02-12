@extends('admin.layouts.main')

@section('content')
    <h1>Daftar Pertanyaan</h1>
    <a href="{{ route('admin.questions.create') }}" class="btn btn-primary mb-2">Tambah Pertanyaan</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Pertanyaan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
                <tr>
                    <td>{{ $question->id }}</td>
                    <td>{{ $question->question_text }}</td>
                    <td>
                        <a href="{{ route('admin.questions.answers.index', $question->id) }}" class="btn btn-sm btn-primary m-1">Lihat</a>
                        <a href="{{ route('admin.questions.edit', $question->id) }}" class="btn btn-sm btn-warning m-1">Edit</a>
                        <form action="{{ route('admin.questions.destroy', $question->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger m-1">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
