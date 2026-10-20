<?php
/* incluye la informacion del archivo conexion.php */
include("conexion.php");

$con = conectar();

/* Consulta corregida (agrega el signo $ y la sintaxis correcta de SQL) */
$sql = "SELECT * FROM alumnos"; 

$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD DE ALUMNOS</title>

    <style>

    table{
        border-collapse: collapse;
        width: 100%;
    }
    th, tr, td{
        border: 2px solid black
    }

    </style>

</head>
<body>
    <h1>Tabla de alumnos</h1>
    <table >
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A</td>
                <td>A</td>
                <td>A</td>
                <td>A</td>
                <td>A</td>
                <td>A</td>
            </tr>
        </tbody>
    </table>

    <h1>Formulario</h1>

    <form action="insetar.php" method="POST">
        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <input type="text" class="form-control" name="matricula" placeholder="Matrícula">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre(s)">
            <input type="text" class="form-control" name="paterno" placeholder="Apellido Paterno">
            <input type="text" class="form-control" name="materno" placeholder="Apellido Materno">
            <input type="number" class="form-control" name="edad" placeholder="Edad" min="0" max="120">
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>
