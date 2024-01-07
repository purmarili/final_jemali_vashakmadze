
@foreach ($questions as $question)
    <div>
        <p>{{ $question->content }}</p>
    </div>
@endforeach
