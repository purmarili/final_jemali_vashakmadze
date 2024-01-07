<template>
  <div>
    <p>{{ question.content }}</p>
    <ul>
      <li v-for="answer in question.answers" :key="answer" @click="checkAnswer(answer)">
        {{ answer }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    question: Object
  },
  methods: {
    checkAnswer(answer) {
      // Logic to check answer
      // Emit an event or make an API call
    }
  }
}
</script>
