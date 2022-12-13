@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <a href="http://127.0.0.1:8000/aulas">Aulas</a>
    <br>
    <a href="http://127.0.0.1:8000/horarios">Horarios</a>
    <br>
    <a href="http://127.0.0.1:8000/categoriajuegos">Categorias</a>
    <br>
    <a href="http://127.0.0.1:8000/videojuegos">Videojuegos</a>
    <br>
    <a href="http://127.0.0.1:8000/equipos">Equipos</a>
    <br>
    <a href="http://127.0.0.1:8000/jugadores">Jugadores</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop