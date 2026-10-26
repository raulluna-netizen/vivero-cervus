<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function inicio() {
        return view('inicio');
    }

    public function productos() {
        return view('productos');
    }

    public function tutoriales() {
        return view('tutoriales');
    }

    public function enviar(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email',
            'pedido' => 'required|string',
        ]);

        return back()->with([
            'success' => true,
            'nombre' => $request->input('nombre'),
            'correo' => $request->input('correo'),
            'pedido' => $request->input('pedido')
        ]);
    }
    Route::post('/pedidos', function () {
    $pedido = Pedido::create([
        'nombre' => request()->input('nombre'),
        'correo' => request()->input('correo'),
        'pedido' => request()->input('pedido'),
    ]);

    return view('pedidos.mostrar', compact('pedido'));
})->name('pedidos.guardar');
}
