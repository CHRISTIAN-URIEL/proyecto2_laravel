
@if(session('status'))
    {{'status'}}
@endif

<table border="1">
<thead>Descripcion de productos</thead>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Descripcion</th>
    </tr>
@foreach($productos as $producto)

        <td>{{$productos->nombre}}</td>
        <td>{{$productos->precio}}</td>
        <td>{{$productos->descripcion}}</td>
    </tr>
    @endforeach
</table>