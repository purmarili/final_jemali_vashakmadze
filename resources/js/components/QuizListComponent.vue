<template>
  <div>
    <div v-for="quiz in quizzes" :key="quiz.id">
      <h3>{{ quiz.name }}</h3>
      <p>{{ quiz.description }}</p>
      <button @click="selectQuiz(quiz.id)">Start Quiz</button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    quizzes: Array
  },
  methods: {
    selectQuiz(quizId) {
      // Logic to select a quiz
    }
  }
}
</script>
