@extends('layouts.base')

@section('contenido')
<p>Realizamos pasteles para cumpleaños, matrimonios y eventos en general, contactenos 703235631</p>
<section class="contenedor">
    <h2>Tortas disponibles</h2>
    @foreach (@tortas as $torta)
    <ul>
        <li>Sabor: {{ $sabor->sabor }}</li>
        <li>Precio: {{ $precio->precio }}</li>

    </ul>
    <a href="{{ route('Tortas_nuevo') }}">ingresar un nuevo sabor de torta</a>
</section>
@endsection

