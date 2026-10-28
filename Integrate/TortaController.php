<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function Tortas() {
        return view('Tortas');
    }

    public function Tortas_nuevo() {
        return view('Tortas_nuevo');
    }

    public function enviar(Request $request) {
        $request->validate([
            'sabor' => 'required|string|max:150',
            'precio' => 'required|string|max:255',
        ]);
       
        return back()->with([
            'success' => true,
            'sabor' => $request->input('sabor'),
            'precio' => $request->input('precio'),
        ]);
    }
    Route::post('/Tortas', function () {
    $tortas = Tortas::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
        
    ]);

    return view('Tortas', compact('tortas'));
})->name('tortas.guardar');
}