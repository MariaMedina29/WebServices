<?php
    include 'conexion.php';

    // Obtener valores enviados por POST
    $archivo = $_POST["archivo"];
    $aprobado_denegado_pos = $_POST["estado"];

    // Realizar la actualización en la base de datos
    $conexion = new mysqli("localhost", "usuario", "contraseña", "basededatos");
    if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
    }

    $sql = "UPDATE tabla_archivos SET aprobado_denegado = $aprobado_denegado_pos WHERE archivo = '$archivo'";
    if ($conexion->query($sql) === TRUE) {
    echo "Actualización exitosa";
    } else {
    echo "Error en la actualización: " . $conexion->error;
    }

    $conexion->close();



    
?>
