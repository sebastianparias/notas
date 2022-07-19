<template>
  <div class="container text-center bg-light mt-2">
    <h1>Lista de tareas</h1>

    

  </div>
</template>

<script>
export default {
  data() {
    return {
      tasks: [],
    };
  },
  created() {
    axios
      .get("/tasks")
      .then((response) => this.tasks = response.data)
      .catch((error) => {
        console.log(error.response);
      });
  },
};
</script>