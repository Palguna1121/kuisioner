@extends('admin.layouts.main')

@section('title', 'Create Answer')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Answer for Question: {{ $question->question_text }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.questions.answers.store', $question) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="answer_text">Content</label>
                <textarea class="form-control" id="answer_text" name="answer_text" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
