@extends('layouts.miPlantilla')
@section('titulo','Editar')
@section('contenido')
<a href="{{ route('producto.index') }}">Volver</a>
<form method="post" action="{{ route('producto.update', $producto->id) }}">
    @csrf
    @method('PUT')
    Nombre: <br>
    <input type="text" name="nombre" value="{{ old('nombre', $producto->nombre) }}" /><br>
    Descripción: <br>
    <input type="text" name="descripcion" value="{{ old('descripcion', $producto->descripcion) }}" /><br>
    Precio_unitario: <br>
    <input type="text" name="precio_unitario" value="{{ old('precio_unitario', $producto->precio_unitario) }}" /><br>
    Cantidad: <br>
    <input type="text" name="cantidad" value="{{ old('cantidad', $producto->cantidad) }}" /><br>
    Categoria: <br>
    <input type="text" name="categoria" value="{{ old('categoria', $producto->categoria) }}" /><br>
    <input type="submit" value="Actualizar" />
</form>
@endsection