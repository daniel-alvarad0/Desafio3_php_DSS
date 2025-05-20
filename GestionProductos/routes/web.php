<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

/*
Route::get('/', function () {
    $productos = Producto::all();
    return view('welcome', ['productos' => $productos]);
});
*/

Route :: get('/producto', [ProductosController::class, 'index'])->name('producto.index');

Route :: get('/producto/create', [ProductosController::class, 'create'])->name('producto.create');

Route :: post('/producto/store', [ProductosController::class, 'store'])->name('producto.store');

Route::get('/producto/{id}/edit', [ProductosController::class, 'edit'])->name('producto.edit');

Route::put('/producto/{id}', [ProductosController::class, 'update'])->name('producto.update');

Route::delete('/producto/{id}', [ProductosController::class, 'destroy'])->name('producto.destroy');