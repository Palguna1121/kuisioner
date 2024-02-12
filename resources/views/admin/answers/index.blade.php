@extends('admin.layouts.main')

@section('title', 'Answers for Question')

@section('content')
<div class="card">
    <div class="mx-4 mt-3">
        <h3 class="card-title">Answers for Question: {{ $question->question_text }}</h3>
    </div>
    <div class="card-header">
        <a class="btn btn-primary" href="{{ route('admin.questions.answers.create', $question) }}">Tambah jawaban</a>
    </div>
    <div class="card-body">
        @if ($answers->isEmpty())
        <p>No answers found.</p>
        @else
        <ul class="list-group">
            @foreach ($answers as $answer)
            <li class="list-group-item">{{ $answer->answer_text }}</li>
            @endforeach
        </ul>
        {{ $answers->links() }} <!-- Pagination links -->
        @endif
    </div>
</div>
@endsection
