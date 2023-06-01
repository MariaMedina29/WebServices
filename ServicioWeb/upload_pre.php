<?php
    include 'conexion.php';

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
            //$id_ultimo_insert = mysqli_insert_id($conexion);
            $sql = $conexion->query("UPDATE pregrado SET pre_1='".$pre_1."', pre_2='".$pre_2."', pre_3='".$pre_3."',pre_4='".$pre_4."',pre_5='".$pre_5."',pre_6='".$pre_6."',pre_7='".$pre_7."',pre_8='".$pre_8."',pre_9='".$pre_9."',pre_10='".$pre_10."',pre_11='".$pre_11."',pre_12='".$pre_12."' WHERE id=(SELECT MAX(id) FROM pregrado);");
            
            echo'
            <script>
                alert("Archivos subidos exitosamente");
                window.location = "docente/index19.html"
            </script>
        ';
        }
    } else {
        echo "No se ha seleccionado ningún archivo para subir";
    }
?>




