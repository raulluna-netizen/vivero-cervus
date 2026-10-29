<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pasteleria La Espiga</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>  


    <header id="inicio">
           
        <div class="cabeza">     
            <h1>Pasteleria La Espiga</h1>
            
        </div>
         
    </header>
    <main>
       
        @yield('contenido')
            
    </main>
    <footer>
            <p>Integradora - Raul Bernardo Luna Tufiño - 27 de octubre de 2026</p>
    </footer>
</body>

</html>