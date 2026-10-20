<?php
echo "hola hola";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>prueba</title>
    <style>
        /* Sección Verde */
        .seccion-verde {
            background-color: lightgreen;
            padding: 20px 40px; /* 20px arriba/abajo, 40px lados */
            margin: 20px;       /* corta */
            border: 10px solid black; /* Grosor, Estilo, Color */
        }

        /* Sección Rosa (larga  */
        .seccion-rosa {
            background-color: lightpink;
            padding: 20px 40px;
            
            /*larga */
            margin-top: 20px;
            margin-right: 30px;
            margin-bottom: 40px;
            margin-left: 50px;

            border: 5px dashed darkred; /* prueba */
        }
    </style>
</head>
<body>

    <h1>Hola Crayola</h1>

    <!--  (Verde) -->
    <div class="seccion-verde">
        <h2>Título del párrafo</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <!-- Rosa -->
    <div class="seccion-rosa">
        <h2>Título del párrafo</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

</body>
</html>