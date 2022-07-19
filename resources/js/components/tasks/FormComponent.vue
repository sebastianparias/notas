<template>
  <div class="container text-center bg-light mt-2">
    <h1>Crear tarea</h1>
    <form method="POST" v-on:submit.prevent="saveTask()">
      <div class="row">
        <div class="col-11">
          <input
            v-model="task"
            type="text-area"
            class="form-control"
            id="description"
            placeholder="Nueva tarea"
          />
        </div>

        <div class="col">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </form>
    <br />
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
        .post("/tasks", { todo: this.task })
        .then((response) => {
          console.log(response);
        })
        .catch((error) => {
          console.log(error.response);
        });
      this.task = "";
    },
  },
};
</script>