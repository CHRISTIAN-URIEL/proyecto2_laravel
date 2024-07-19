@extends('VISTA')

@section('logueo')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login1.css')}}">
    <title>Iniciar Sesion</title>
</head>
<body>
    <div class="content"></div>
    <form action="{{route('logueo')}}" method="POST">
    @csrf
        <h1>Iniciar Sesión</h1>
        <input type="text" placeholder="Ingrese su Correo" name="email">
        <input type="password" placeholder="Ingrese su contraseña" name="password">
        <button href="Admin">Iniciar Sesion</button>
        <p class="link"><a href="Admin">¿Aun no tienes cuenta?</a></p>
    </form>
</body>
</html>
@stop










