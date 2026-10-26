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


