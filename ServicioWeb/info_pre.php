<?php

    include 'conexion.php';

    $nom_pre = $_POST['nom_pre'];
    $cod_pre = $_POST['cod_pre'];
    $correo_pre = $_POST['correo_pre'];
    $pre = $_POST['pre'];

    $query_pre = "INSERT INTO pregrado(nom_pre, cod_pre, correo_pre, pre) 
                VALUES('$nom_pre', '$cod_pre', '$correo_pre', '$pre')";
 

    $verificar_est = mysqli_query($conexion,"SELECT * FROM pregrado WHERE correo_pre='$correo_pre'");

    if(mysqli_num_rows($verificar_est) > 0){

        echo'
            <script>
                alert("El estudiante ya existe, intentar con otro diferente");
                window.location = "docente/index13.html"
            </script>
        ';
        exit();
    }

    $ejecutar_pre = mysqli_query($conexion, $query_pre);

    if($ejecutar_pre){
        echo'
            <script>
                alert("La información del estudiante se guardo correctamente")
                window.location="docente/index15.html";
            </script>
        ';
    }else{
        echo'
            <script>
                alert("Error... Intenta agregar el estudiante de nuevo")
                window.location="docente/index13.html";
            </script>
        ';
    }

    mysqli_close($conexion);

?>