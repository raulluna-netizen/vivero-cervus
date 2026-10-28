@extends('layouts.app')

@section('contenido')
<section id="servicios">
    <h2>Servicios</h2>

    <ul class="opciones">
        <li>Venta de Plantas</li>
        <li>Venta de Implementos y Equipos</li>
        <li>Asesoramiento Personalizado</li>
        <li>Venta de Alimento Vivo</li>
    </ul>
</section>
<section id="pedidos">
    <h2>Realizar un pedido</h2>

    @if (session('exito'))
        <p class="mensaje-exito">{{ session('exito') }}</p>
    @endif

    @if ($errors->any())
        <div class="errores">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form id="form-pedido"
          action="{{ route('pedidos.guardar') }}"
          method="POST">

        @csrf

        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required >

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required >

        <label for="pedido">Describe tu pedido:</label>
        <textarea id="pedido" name="pedido" required >{{ old('pedido') }}</textarea>

        <button type="submit">Enviar pedido</button>
    </form>
</section>

@endsection