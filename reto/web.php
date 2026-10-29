<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pedido;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/tutoriales', function () {
    return view('tutoriales');
});

Route::post('/pedidos', function () {
    $pedido = Pedido::create([
        'nombre' => request()->input('nombre'),
        'correo' => request()->input('correo'),
        'pedido' => request()->input('pedido'),
    ]);

    return view('mostrar', compact('pedido'));
})->name('pedidos.guardar');

use App\Models\Torta;

Route::get('/Tortas', function () {
    $tortas = Torta::all(); 
    return view('Tortas', compact('tortas'));
})->name('Tortas');

Route::get('/Tortas_nuevo', function () {
    return view('Tortas_nuevo');
})->name('Tortas_nuevo');

Route::post('/Tortas', function () {
     $torta_creada = Torta::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
        'stock' => request()->input('stock'),
    ]);

    $tortas = Torta::all(); 
    return view('Tortas', compact('tortas'));
})->name('tortas.guardar');

