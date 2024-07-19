<h1>Carrito de compras</h1>
@if(session('status'))
    {{'status'}}    
@endif

<?php $valor = 0 ?>
@if(session('carrito'))
<table border='4'>
    <tr>
        <th>nombre</th>
        <th>precio</th>
        <th>cantidad</th>
        <th>Importe de producto</th>
    </tr>
@foreach (session('carrito') as $id => $detalle)
<?php $valor += $detalle['precio'] * $detalle['cantidad']?>
    <tr>
        <td>{{$detalle->nombre}}</td>
        <td>{{$detalle->precio}}</td>
        <td>{{$detalle->cantidad}}</td>
        <td>{{$detalle['precio'] * $detalle['cantidad']}}</td>
    </tr>
@endforeach
</table> <br>
<p>Total = {{$valor}}</p>
@endif
