@extends('layouts.miPlantilla') 
@section('titulo','Inicio') 
@section('contenido') 
<div class="d-flex justify-content-center bg-light" style="margin-top: 40px;">
    <div class="w-75 mt-5">
        <h1 class="text-center mb-4">Lista de Productos</h1>
        <a href="{{route('producto.create')}}" class="btn btn-success mb-3">Nuevo Producto</a>
        <table class="table table-bordered table-striped text-center align-middle"> 
            <thead class="table-dark"> 
                <tr> 
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio unitario</th>
                    <th>Cantidad</th>
                    <th>Categoria</th>
                    <th>Acciones</th>
                </tr> 
            </thead> 
            <tbody> 
                @foreach($listaProductos as $producto) 
                    <tr>
                        <th scope="row">{{ $producto->id }}</th>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio_unitario }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>{{ $producto->categoria }}</td>
                        <td>
                            <a href="{{ route('producto.edit', $producto->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('producto.destroy', $producto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach 
            </tbody>    
        </table>
    </div>
</div>
@endsection