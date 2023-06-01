<?php
    include 'conexion.php';

    if(isset($_POST['subir'])){
        $numArchivos = 16; // Número total de archivos a subir
        $archivosSubidos = 0; // Contador de archivos subidos correctamente

        for($i = 1; $i <= $numArchivos; $i++){
            $file = $_FILES['pos_'.$i];
            $fileName = $file['name'];
            $fileType = $file['type'];

            // Verificar si el archivo es un PDF
            if($fileType == 'application/pdf') {
                if(move_uploaded_file($file['tmp_name'], 'archivos/'.$fileName)){
                    ${"pos_".$i} = 'archivos/'.$fileName;
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
            $sql = $conexion->query("UPDATE posgrado SET pos_1='".$pos_1."', pos_2='".$pos_2."', pos_3='".$pos_3."',pos_4='".$pos_4."',pos_5='".$pos_5."',pos_6='".$pos_6."',pos_7='".$pos_7."',pos_8='".$pos_8."',pos_9='".$pos_9."',pos_10='".$pos_10."',pos_11='".$pos_11."',pos_12='".$pos_12."',pos_13='".$pos_13."',pos_14='".$pos_14."' , pos_15='".$pos_15."', pos_16='".$pos_16."' WHERE id=(SELECT MAX(id) FROM posgrado);");
            echo "Archivos subidos exitosamente";
        }
    } else {
        echo "No se ha seleccionado ningún archivo para subir";
    }
?>




