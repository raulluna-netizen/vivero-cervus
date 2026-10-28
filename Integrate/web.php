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

use Illuminate\Support\Facades\Route;
use App\Models\Torta;

Route::get('/Tortas', function () {
    return view('Tortas');
})->name('Tortas');

Route::get('/Tortas_nuevo', function () {
    return view('Tortas_nuevo');
});

Route::post('/Tortas', function () {
     $tortas = Tortas::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
        
    ]);

return view('Tortas', compact('tortas'));
})->name('tortas.guardar');
   