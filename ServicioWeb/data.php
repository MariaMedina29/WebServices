<?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['email'], $_GET['name'], $_GET['password'])) {
        $email = $_GET["email"];
        $name = $_GET["name"];
        $password = $_GET["password"];

        $nom_pos = $_POST['nom_pos'];
        $cod_pos = $_POST['cod_pos'];
        $correo_pos = $_POST['correo_pos'];
        $pos = $_POST['pos'];

        $nom_pre = $_POST['nom_pre'];
        $cod_pre = $_POST['cod_pre'];
        $correo_pre = $_POST['correo_pre'];
        $pre = $_POST['pre'];




        /*
        $enlace = mysqli_connect('sql212.epizy.com', 'epiz_34230880', 'yxd8B0tRN2lBAH7', 'epiz_34230880_servicioweb');

        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
        } else {
            echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
            echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

            // Preparar la consulta SQL
            $consulta = "INSERT INTO tu_tabla (email, name, password) VALUES ('$email', '$name', '$password')";

            // Ejecutar la consulta
            if (mysqli_query($enlace, $consulta)) {
                echo "Datos insertados correctamente en la base de datos.";
            } else {
                echo "Error al insertar datos: " . mysqli_error($enlace);
            }
        }

        mysqli_close($enlace);*/
    }
?>