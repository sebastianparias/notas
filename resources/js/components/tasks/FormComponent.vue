<template>
  <div class="container text-center bg-light mt-2">
    <h1>Crear tarea</h1>
    <form method="POST" v-on:submit.prevent="saveTask()">
      <div>
        <input v-model="task" type="text" class="form-control" id="description" placeholder="Nueva tarea" name="todo" />
        <input type="submit" class="btn btn-primary" value="Save" />
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      task: '',
    };
  },
  methods: {
    saveTask() {
      axios
        .post('/tasks', {
          todo: this.task,
        })
        .then(response => { console.log(response) })
        .catch(error => { console.log(error.response) });
      this.$router.push("/tasks");
      this.task = "";
    },
  },
};
</script>