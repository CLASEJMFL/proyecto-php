<?php
    $servidor = "db";
    $usuario = "usuario";
    $password = "clave";
    $basedatos = "instituto";

    $conexion = new mysqli(
        $servidor,
        $usuario,
        $password,  
        $basedatos
    );

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicios php</h1>
    <ul>
        <li><a href="ruta">ejercicio</a></li>
    </ul>

</body>
</html>