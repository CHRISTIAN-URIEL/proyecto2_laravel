@extends('VISTA')

@section('clientes')
<section>
    <table border='6'>
    <thead>
    Clientes recientes
    </thead>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>CORREO</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
    </tr>
@foreach($clientes as $cliente)
    <tr>
        <td>{{$cliente->ID}}</td>
        <td>{{$cliente->NOMBRE}}</td>
        <td>{{$cliente->CORREO}}</td>
        <td>{{$cliente->DIRECCION}}</td>
        <td>{{$cliente->TELEFONO}}</td>
    </tr>
@endforeach
    </table>
</section>
@stop