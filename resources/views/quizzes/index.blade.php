{{-- List all quizzes --}}
@foreach ($quizzes as $quiz)
    <div>
        <h2>{{ $quiz->name }}</h2>
        <p>{{ $quiz->description }}</p>
        <a href="{{ route('quizzes.show', $quiz) }}">Take Quiz</a>
    </div>
@endforeach
