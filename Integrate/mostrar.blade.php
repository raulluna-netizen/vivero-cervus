@extends('layouts.app')


@section('contenido')
<section class="contenedor-pedido">
    <h2>Pedido registrado correctamente</h2>

    <p><strong>Nombre completo:</strong> {{ $pedido->nombre }}</p>

    <p><strong>Correo electrónico:</strong> {{ $pedido->correo }}</p>

    <p><strong>Descripción del pedido:</strong></p>
    <p>{{ $pedido->pedido }}</p>

    <a href="{{ route('inicio') }}">Volver al inicio</a>
</section>
@endsection