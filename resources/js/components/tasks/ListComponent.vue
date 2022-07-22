<template>
  <div class="container text-center bg-light mt-2">
    <h1>Lista de tareas</h1>
    <!-- <div class="row mt-3" v-for="task in tasks.data" :key="task.id"> -->
    <div class="row mt-3" v-for="task in tasks" :key="task.id">
      <div class="col">
        <input type="checkbox" id="status" :checked="task.completed" v-on:click="completeTask(task)" />
        <label for="status"></label>
      </div>
      <div class="col">
        {{ task.todo }}
      </div>

      <div class="col">
        <router-link :to="'/edit/' + task.id" class="text-primary"><i class="bi bi-pencil"></i></router-link>

        <form class="d-inline" v-on:submit.prevent="deleteTask(task.id)">
          <button type="submit" class="btn text-danger">
            <i class="bi bi-trash"></i>
          </button>
        </form>
      </div>
    </div>
    <!-- <pagination :data="tasks" @pagination-change-page="getTasks"></pagination> -->
  </div>
</template>

<script>
import axios from "axios"; //?

export default {
  data() {
    return {
      tasks: {},
    };
  },
  mounted() {
    this.getTasks();
  },
  methods: {
    getTasks(page = 1) {
      axios
        .get('/tasks?page=' + page)
        .then(response => (this.tasks = response.data))
        .catch(error => {
          console.log(error.response);
        });
    },
    completeTask(task) {
      if (task.completed === 0) {
        var complete = 1;
      } else {
        var complete = 0;
      }
      axios
        .put('/tasks/' + task.id,
          {
            todo: task.todo,
            completed: complete,
          })
        .then(response => {
          console.log(response);
        })
        .catch(error => {
          console.log(error.response)
        });
      this.getTasks();
    },
    deleteTask(id) {
      axios
        .delete("/tasks/" + id)
        .then((response) => {
          console.log(response);
        })
        .catch((error) => {
          console.log(error.response);
        });
      this.getTasks();
    },
  },
};
</script>