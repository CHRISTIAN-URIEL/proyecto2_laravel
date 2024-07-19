@extends('VISTA')

@section('Slidder')

<body>
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
    <form action="">
        <h1>Crear cuenta</h1>
        <input type="text" placeholder="Ingresa tu nombre">
        <input type="email" placeholder="Ingrese tu correo">
        <input type="password" placeholder="Ingrese su contraseña">
        <button>Crear cuenta</button>
    </form>
</body>
</html>
    
@stop