<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;    

class ProductosController extends Controller
{
    public function index()
    {
        $listaProductos = Producto::all();
        return view('producto.index', compact('listaProductos'));
    }

    public function create()
    {
        return view('producto.create');
    }

    public function store(Request $request)
    {
        $nuevoProducto = new Producto();

        $nuevoProducto->nombre = $request->input('nombre');
        $nuevoProducto->descripcion = $request->input('descripcion');
        $nuevoProducto->precio_unitario = $request->input('precio_unitario');
        $nuevoProducto->cantidad = $request->input('cantidad');
        $nuevoProducto->categoria = $request->input('categoria');

        $nuevoProducto->save();

        return redirect()->route('producto.index')->with('success', 'Producto creado.');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio_unitario = $request->input('precio_unitario');
        $producto->cantidad = $request->input('cantidad');
        $producto->categoria = $request->input('categoria');

        $producto->save();

        return redirect()->route('producto.index')->with('success', 'Producto actualizado.');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('producto.index')->with('success', 'Producto eliminado.');
    }
}
