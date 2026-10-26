<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vivero Cervus</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>

    <header id="inicio">
           
        <div class="cabeza">     
            <h1>Vivero Cervus</h1>
            <p>Vivero especializado en crianza de plantas acuaticas</p>
        </div>
            
         
        <nav class="menu">
            <button id="menu">Menú</button>
            <ul >
                <li><a href="/inicio">Inicio</a></li>
                <li><a href="/productos">Productos</a></li>
                <li><a href="/tutoriales">Tutoriales</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="barra-opciones">
            <button type="button" id="modoilum">
                Modo Oscuro
            </button>
        </div>

        @yield('contenido')
    
        <section>      
        <h3>Contactanos</h3>  

            <h4>Direccion</h4>
            <p>Potosí</p>
            <p>Av.Union /sn Zona Villa Imperial</p>
            <p>Av.Argentina n°300 Zona Ciudad Satelite</p>
            <h4>Telefono</h4>
            <p>60606060</p>
                    
        </section>
        <h5>Para saber más</h5>
        <h3><a href="https://es.wikipedia.org/wiki/Planta_acu%C3%A1tica">¿Que son las plantas acuaticas?</a></h3>
    
    </main>
</body>
<script src="{{ asset('js/script.js') }}" defer></script>
</html>