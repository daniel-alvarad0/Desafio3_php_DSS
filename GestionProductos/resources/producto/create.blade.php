@extends('layouts.miPlantilla')
@section('titulo','Crear')
@section('contenido')
<a href="{{route('producto.index')}}">Volver</a>
<form method="post" action="{{route('producto.store')}}">
    @csrf
    Nombre: </br>
    <input type="text" name="nombre" /></br>
    Descripción: </br>
    <input type="text" name="descripcion" /></br>
    Precio_unitario: </br>
    <input type="text" name="precio_unitario" /></br>
    Cantidad: </br>
    <input type="text" name="cantidad" /></br>
    Categoria: </br>
    <input type="text" name="categoria" /></br>
    <input type="submit" value="Enviar" />
</form>
@endsection