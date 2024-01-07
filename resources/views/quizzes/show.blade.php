@extends('layouts.app')

@section('content')
    <div id="quiz-container">
        <h2>{{ $quiz->name }}</h2>
        <p>{{ $quiz->description }}</p>
        
        <div id="questions">
            {{-- Questions will be loaded here by JavaScript --}}
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            loadQuestions();
        });

        function loadQuestions() {
            fetch(`/quizzes/${{{ $quiz->id }}}/questions`)
                .then(response => response.json())
                .then(questions => {
                    displayQuestions(questions);
                });
        }

        function displayQuestions(questions) {
            const questionsContainer = document.getElementById('questions');
            questions.forEach(question => {
                const questionDiv = document.createElement('div');
                questionDiv.innerHTML = `
                    <p>${question.content}</p>
                    <ul>
                        ${question.answers.map(answer => `
                            <li onclick="checkAnswer(${question.id}, '${answer}')">${answer}</li>
                        `).join('')}
                    </ul>
                `;
                questionsContainer.appendChild(questionDiv);
            });
        }

        function checkAnswer(questionId, selectedAnswer) {
            // Send the selected answer to the server using AJAX
            // Assume server endpoint is /api/check-answer
            fetch('/api/check-answer', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ questionId, selectedAnswer })
            })
            .then(response => response.json())
            .then(result => {
                // Display if the answer was correct or not
                alert(result.message); // Or update the DOM as needed
            });
        }
    </script>
@endsection
