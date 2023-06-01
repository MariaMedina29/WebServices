<?php

    include 'conexion.php';

    $nom_pos = $_POST['nom_pos'];
    $cod_pos = $_POST['cod_pos'];
    $correo_pos = $_POST['correo_pos'];
    $pos = $_POST['pos'];

    $query_pos = "INSERT INTO posgrado(nom_pos, cod_pos, correo_pos, pos) 
                VALUES('$nom_pos', '$cod_pos', '$correo_pos', '$pos')";
 

    $verificar_est = mysqli_query($conexion,"SELECT * FROM posgrado WHERE correo_pos='$correo_pos'");

    if(mysqli_num_rows($verificar_est) > 0){

        echo'
            <script>
                alert("El estudiante ya existe, intentar con otro diferente");
                window.location = "docente/index12.html"
            </script>
        ';
        exit();
    }

    $ejecutar_pos = mysqli_query($conexion, $query_pos);

    if($ejecutar_pos){
        echo'
            <script> 
                alert("La información del estudiante se guardo correctamente")
                window.location="docente/index14.html";
            </script>
        ';
    }else{
        echo'
            <script>
                alert("Error... Intenta agregar el estudiante de nuevo")
                window.location="docente/index12.html";
            </script>
        ';
    }

    mysqli_close($conexion);

?>