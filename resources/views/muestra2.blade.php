@extends('VISTA')

@section('comps')
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
@foreach($complementos as $complemento)
    <tr>
        <td>{{$complemento->categoria}}</td>
        <td>{{$complemento->codigo}}</td>
        <td>{{$complemento->vista}}</td>
        <td>{{$complemento->nombre}}</td>
        <td>{{$complemento->descripcion}}</td>
        <td>{{$complemento->precio}}</td>

    </tr>
@endforeach
    </table>
</section>
@stop
