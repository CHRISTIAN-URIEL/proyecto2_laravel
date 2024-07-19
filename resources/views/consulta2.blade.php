@extends('VISTA')

@section('consulta2')
<section>
    <table border='4'>
    <thead>
    Productos de la empresa
    </thead>
    <tr>
        <th>categoria</th>
        <th>codigo</th>
        <th>vista</th>
        <th>nombre</th>
        <th>descripcion</th>
        <th>precio</th>
    </tr>
@foreach($hamburguesas as $hamburguesa)
    <tr>
        <td>{{$hamburguesa->categoria}}</td>
        <td>{{$hamburguesa->codigo}}</td>
        <td>{{$hamburguesa->vista}}</td>
        <td>{{$hamburguesa->nombre}}</td>
        <td>{{$hamburguesa->descripcion}}</td>
        <td>{{$hamburguesa->precio}}</td>
    </tr>
@endforeach
    </table>
</section>
@stop