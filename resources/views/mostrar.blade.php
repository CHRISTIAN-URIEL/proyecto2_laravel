@extends('ADMIN')

@section('mostrar')
<section>
    <table border='4'>
    <tr>
        <th>codigo</th>
        <th>nombre</th>
        <th>precio</th>
        <th>cantidad</th>
        <th>descripcion</th>
        <th>fotografia</th>
    </tr>
@foreach($productos as $producto)
    <tr>
        <td>{{$producto->codigo}}</td>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->precio}}</td>
        <td>{{$producto->cantidad}}</td>
        <td>{{$producto->descripcion}}</td>
        <td><img height='100' src='imagenes/{{$producto->fotografia}}'></td>
        <td><a href="{{url('AgregarCarrito/'.$producto->id)}}">Agregar al carrito</a></td>
        <td><a href="{{url('rutaDescripcion/'.$producto->id)}}">Descripcion</a></td>
    </tr>
@endforeach
    </table>
    <a href="{{url('rutaCarrito'.$producto->id)}}">Carrito de compras</a>
</section>
@stop