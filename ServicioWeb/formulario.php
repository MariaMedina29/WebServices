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
        if(isset($_POST['subir'])){
            $numArchivos = 12; // Número total de archivos a subir
            $archivosSubidos = 0; // Contador de archivos subidos correctamente
    
            for($i = 1; $i <= $numArchivos; $i++){
                $file = $_FILES['pre_'.$i];
                $fileName = $file['name'];
                $fileType = $file['type'];
    
                // Verificar si el archivo es un PDF
                if($fileType == 'application/pdf') {
                    if(move_uploaded_file($file['tmp_name'], 'archivos/'.$fileName)){
                        ${"pre_".$i} = 'archivos/'.$fileName;
                        $archivosSubidos++;
                    } else {
                        echo "Ha ocurrido un error al subir el archivo ".$i."<br>";
                    }
                } else {
                    echo "El archivo ".$i." no está en el formato correcto (PDF), favor revisar<br>";
                }
            }
    
            // Verificar si todos los archivos fueron subidos correctamente
            if($archivosSubidos == $numArchivos){
                // Realizar la inserción en la base de datos
                $sql = $conexion->query("INSERT INTO pregrado (pre_1, pre_2, pre_3, pre_4, pre_5, pre_6, pre_7, pre_8, pre_9, pre_10, pre_11, pre_12)
                                        VALUES ('".$pre_1."', '".$pre_2."', '".$pre_3."', '".$pre_4."', '".$pre_5."', '".$pre_6."', '".$pre_7."', '".$pre_8."', '".$pre_9."', '".$pre_10."', '".$pre_11."', '".$pe_12."')");
                echo "Archivos subidos exitosamente";
            }
        }
    }

    mysqli_close($conexion);

?>
