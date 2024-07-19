@extends('VISTA')

@section('burguer')
<section>
    <table border='4'>
    <thead>
    Productos de la empresa
    </thead>
    <tr>
        <th>categoria</th>
        <th>codigo</th>
        <th>cantidad</th>
        <th>nombre</th>
        <th>descripcion</th>
        <th>precio</th>
    </tr>
@foreach($hamburguesas as $hamburguesa)
    <tr>
        <td>{{$hamburguesa->categoria}}</td>
        <td>{{$hamburguesa->codigo}}</td>
        <td>{{$hamburguesa->cantidad}}</td>
        <td>{{$hamburguesa->nombre}}</td>
        <td>{{$hamburguesa->descripcion}}</td>
        <td>{{$hamburguesa->precio}}</td>
        <!--<td><a href="{{url('AgregarCarrito/'.$hamburguesa->codigo)}}">Agregar al carrito</a></td>-->        
        <!--<td><a href="{{url('rutaDscripcion/'.$hamburguesa->codigo)}}">Descripcion</a></td>-->
    </tr>
@endforeach
    </table>
<!--        <a href="{{url('rutaCarrito/'.$hamburguesa->codigo)}}">Carrito de compras</a>-->
</section>
@stop