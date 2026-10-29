@extends('layouts.base')

@section('contenido')
<p>Realizamos pasteles para cumpleaños, matrimonios y eventos en general, contactenos 703235631</p>
<section class="contenedor">
    <h2>Tortas disponibles</h2>
   
    <ul>
         @foreach ($tortas as $torta)
        <li>Sabor: {{ $torta->sabor }}</li>
        <li>Precio: {{ $torta->precio }}</li>
        <li>Precio: {{ $torta->stock }}</li>

@endforeach
    </ul>

    <a href="{{ route('Tortas_nuevo') }}">ingresar un nuevo sabor de torta</a>
</section>
@endsection

