<?php

    include 'conexion.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    //$contrasena = hash('sha512' , $contrasena);//encriptar contraseña

    $query = "INSERT INTO login(nombre_completo, correo, contrasena) 
                VALUES('$nombre_completo', '$correo', '$contrasena')";
 

    $verificar_correo = mysqli_query($conexion,"SELECT * FROM login WHERE correo='$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){

        echo'
            <script>
                alert("Este correo ya exisite, intentar con otro diferente");
                window.location = "docente/index7.html"
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
            <script>
                alert("Cuenta creada con exito")
                window.location="docente/index2.html";
            </script>
        ';
    }else{
        echo'
            <script>
                alert("Error... Intenta crear la cuenta de nuevo")
                window.location="docente/index7.html";
            </script>
        ';
    }

    mysqli_close($conexion);

?>