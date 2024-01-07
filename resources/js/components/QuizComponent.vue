<template>
  <div>
    <h1>{{ quiz.name }}</h1>
    <p>{{ quiz.description }}</p>
    <question-component
      v-for="question in quiz.questions"
      :key="question.id"
      :question="question"
    ></question-component>
  </div>
</template>

<script>
import QuestionComponent from './QuestionComponent.vue';

export default {
  components: {
    QuestionComponent
  },
  props: {
    quiz: Object
  }
}
</script>
