@extends('ADMIN')

@section('registrar')
<section>
    <form action="{{route('AgregarBD')}}" method="POST" enctype="multipart/form-data">
            @csrf
            Codigo:<input type="Text" name="Codigo"><br>
            Nombre:<input type="Text" name="Nombre"><br>
            Precio:<input type="Text" name="Precio"><br>
            Cantidad:<input type="Text" name="Cantidad"><br>
            Descripcion:<input type="Text" name="Descripcion"><br>
            fotografia:<input type="file" name="foto" id="foto"><br>
            <input type="submit" name="enviar" value="Aceptar">
    </form>
</section>
@stop