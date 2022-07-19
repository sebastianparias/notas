@extends('layouts.app')

@section('content')


<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Notas</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link to="/home" class="nav-link">Inicio</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/form" class="nav-link">Añadir tarea</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/tasks" class="nav-link">Lista de tareas</router-link>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div>
    <router-view></router-view>

</div>


@endsection