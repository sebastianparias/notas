<template>
  <div class="container text-center bg-light mt-2">
    <h1>Editar tarea {{ id }}</h1>
    <form method="POST" v-on:submit.prevent="editTask()">
      <div class="row">
        <div class="col-11">
          <input v-model="task.todo" type="text-area" class="form-control" id="description" placeholder="Editar tarea" />
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
      id: this.$route.params.id,
      task: []
    };
  },

  created() {
    axios.get('/tasks/'+this.id+'/edit')
    .then(response => this.task = response.data)
    .catch();
  },

  methods: {
    editTask() {
      axios
        .put('/tasks/'+this.id, { todo: this.task.todo })
        .then((response) => {
          console.log(response);
        })
        .catch((error) => {
          console.log(error.response);
        });
      this.task.todo = "";
      this.$router.push('/tasks');
    },
  },
};
</script>