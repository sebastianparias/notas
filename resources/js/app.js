/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */


import FormComponent from './components/tasks/FormComponent.vue';
import ListComponent from './components/tasks/ListComponent.vue';
import EditComponent from './components/tasks/EditComponent.vue';


const routes = [
    { 
        path: '/form',
        component: FormComponent,
    },
    { 
        path: '/tasks',
        component: ListComponent,
    },
    { 
        path: '/edit/:id',
        component: EditComponent
    }
];

const router = new VueRouter({
    routes // short for `routes: routes`
  })



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
  router
}).$mount('#app')
