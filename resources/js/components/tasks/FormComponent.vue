<template>
  <div class="container text-center bg-light mt-2">
    <h1>Crear tarea</h1>
    <form method="POST" v-on:submit.prevent="saveTask()">
      <input
        v-model="task"
        type="text-area"
        class="form-control"
        id="description"
        placeholder="Nueva tarea"
      />
      <input type="submit" class="btn btn-primary" value="Enviar" />
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      task: "",
    };
  },
  methods: {
    saveTask() {
      axios
        .post("/tasks", {
          todo: this.task,
          completed: 0,
        })
        .then(function (response) {
          console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
      this.$router.push("/tasks");
    },
  },
};
</script>