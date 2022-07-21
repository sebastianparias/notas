@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand">Notas</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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