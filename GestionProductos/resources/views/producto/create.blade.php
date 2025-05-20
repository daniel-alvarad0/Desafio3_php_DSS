@extends('layouts.miPlantilla')
@section('titulo','Crear')
@section('contenido')
<a href="{{route('producto.index')}}" class="btn btn-secondary mb-3">Volver</a>
<div class="d-flex justify-content-center">
    <div style="width: 320px;">
        <h4 class="mb-4 text-center">Crear Producto</h4>
        <form method="post" action="{{route('producto.store')}}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" class="form-control" />
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción:</label>
                <input type="text" name="descripcion" class="form-control" />
            </div>
            <div class="mb-3">
                <label class="form-label">Precio unitario:</label>
                <input type="text" name="precio_unitario" class="form-control" />
            </div>
            <div class="mb-3">
                <label class="form-label">Cantidad:</label>
                <input type="text" name="cantidad" class="form-control" />
            </div>
            <div class="mb-3">
                <label class="form-label">Categoria:</label>
                <input type="text" name="categoria" class="form-control" />
            </div>
            <button type="submit" class="btn btn-success w-100">Crear</button>
        </form>
    </div>
</div>
@endsection