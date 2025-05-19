@extends('layouts.miPlantilla') 
@section('titulo','Inicio') 
@section('contenido') 
 <a href="{{route('producto.create')}}">Nuevo Producto</a> 
 <table border='1' style='border-collapse:collapse'> 
        <thead> 
            <tr> 
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio_unitario</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Categoria</th>
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
                        <a href="{{ route('producto.edit', $producto->id) }}" class="btn">Editar</a>
                        <form action="{{ route('producto.destroy', $producto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach 
        </tbody>    
    </table> 
@endsection