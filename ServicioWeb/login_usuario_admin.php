<?php
    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM login WHERE correo='$correo'
    and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        header("location: admin/index21.html");//Ingresar
        exit;
    }else{
        echo '
            <script>
                alert("El usuario no existe, favor verificar datos introducidos");
                window.location = "admin/index3.html";
            </script>
        ';
        exit;
    }
?>