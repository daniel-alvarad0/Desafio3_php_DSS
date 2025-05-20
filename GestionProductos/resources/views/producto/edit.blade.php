@extends('layouts.miPlantilla')
@section('titulo','Editar')
@section('contenido')
<a href="{{ route('producto.index') }}" class="btn btn-secondary mb-3">Volver</a>
<div class="d-flex justify-content-center">
    <div style="width: 350px;">
        <h4 class="mb-4 text-center">Editar Producto</h4>
        <form method="post" action="{{ route('producto.update', $producto->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre" value="{{ old('nombre', $producto->nombre) }}" class="form-control" />
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción:</label>
                <input type="text" name="descripcion" value="{{ old('descripcion', $producto->descripcion) }}" class="form-control" />
            </div>
            <div class="mb-3">
                <label class="form-label">Precio unitario:</label>
                <input type="text" name="precio_unitario" value="{{ old('precio_unitario', $producto->precio_unitario) }}" class="form-control" />
            </div>
            <div class="mb-3">
                <label class="form-label">Cantidad:</label>
                <input type="text" name="cantidad" value="{{ old('cantidad', $producto->cantidad) }}" class="form-control" />
            </div>
            <div class="mb-3">
                <label class="form-label">Categoria:</label>
                <input type="text" name="categoria" value="{{ old('categoria', $producto->categoria) }}" class="form-control" />
            </div>
            <button type="submit" class="btn btn-success w-100">Actualizar</button>
        </form>
    </div>
</div>
@endsection