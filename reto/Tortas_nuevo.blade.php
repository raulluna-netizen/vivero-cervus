@extends('layouts.base')

@section('contenido')

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

    <form id="form-torta"
          action="{{ route('tortas.guardar') }}"
          method="POST">

        @csrf

        <label for="sabor">Sabor:</label>
        <input type="text" id="sabor" name="sabor" value="{{ old('sabor') }}" required >

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" value="{{ old('precio') }}" required >
        
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" value="{{ old('stock') }}" required >


        <button type="submit">Registrar Tortas</button>
        <p>Vitrina atendida por Raul Bernardo Luna Tufiño</p>
    </form> 
</section>

@endsection