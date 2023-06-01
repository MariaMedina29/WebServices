<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Subir documentos pregrado</title>
</head>
<body>
    <header>
        <div class="contenedor13">
            <h1>UMNG</h1>
            <a href="../index.html" class="cerrarsesion">
                Cerrar sesión
            </a>
        </div>
    </header>
    <main>
        <h2>REVISIÓN DE PROCESO</h2>
        <br><br>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Consultar la base de datos para obtener los datos de la fila correspondiente al ID
            include('../conexion.php');
            if ($conexion) {
                $consulta = "SELECT * FROM pregrado WHERE id = '$id'";
                $resultado = mysqli_query($conexion, $consulta);
                if ($resultado) {
                    $row = $resultado->fetch_assoc();
                    // Mostrar los datos de la fila
                    echo "<div class='proceso1'>";
                    echo "Estudiante: " . $row['nom_pre'];
                    echo "</div>";
                    echo "<br><br>";
                    echo "<div class='proceso1'>";
                    echo "Correo: " . $row['correo_pre'];
                    echo "</div>";
                    echo "<br><br>";
                    echo "<div class='proceso1'>";
                    echo "Código: " . $row['cod_pre'];
                    echo "</div>";
                    echo "<br><br>";
                    echo "<div class='proceso1'>";
                    echo "Pregrado: " . $row['pre'];
                    echo "</div>";

                } else {
                    echo "Error en la consulta: " . mysqli_error($conexion);
                }
            } else {
                echo "Error en la conexión a la base de datos.";
            }
        } else {
            echo "<p>No se ha seleccionado ningún ID.</p>";
        }
        ?>


        <br><br><br>
        <hr class="linea2">

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Consultar la base de datos para obtener los datos de la fila correspondiente al ID
            include('../conexion.php');
            if ($conexion) {
                $consulta = "SELECT * FROM pregrado WHERE id = '$id'";
                $resultado = mysqli_query($conexion, $consulta);
                if ($resultado) {
                    $row = $resultado->fetch_assoc();
                    // Mostrar los documentos subidos
                    echo "<div class='proceso1'>";
                    echo "<ul>";
                    if (!empty($row["pre_1"])){
                        echo "<div class='textoinformativo3'>Lista de chequeo Pregrado</div>";
                        $documento1 = '../' . $row["pre_1"];
                        $nombreArchivo1 = pathinfo($documento1, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento1' target='_blank'>$nombreArchivo1.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="1">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado1" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado1" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';

                        // Comprobamos si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '1') {
                            $estado1 = 0; // Valor inicial para evitar la variable indefinida

                            if (isset($_POST['aprobado1'])) {
                                $estado1 = 1; // Aprobado
                            } elseif (isset($_POST['denegado1'])) {
                                $estado1 = 2; // Denegado
                            }

                            // Actualizar el estado en la base de datos
                            $actualizarConsulta1 = "UPDATE pregrado SET aprobado_denegado_pre1 = '$estado1' WHERE id = $id";
                            $actualizarResultado1 = mysqli_query($conexion, $actualizarConsulta1);
                        }
                    }

                    if (!empty($row["pre_2"])){
                        echo "<div class='textoinformativo3'>Copia de la convocatoria</div>";
                        $documento2 = '../' . $row["pre_2"];
                        $nombreArchivo2 = pathinfo($documento2, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento2' target='_blank'>$nombreArchivo2.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="2">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado2" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado2" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';
                    
                        // Comprobamos si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '2') {
                            $estado2 = 0; // Valor inicial para evitar la variable indefinida
                    
                            if (isset($_POST['aprobado2'])) {
                                $estado2 = 1; // Aprobado
                            } elseif (isset($_POST['denegado2'])) {
                                $estado2 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta2 = "UPDATE pregrado SET aprobado_denegado_pre2 = '$estado2' WHERE id = $id";
                            $actualizarResultado2 = mysqli_query($conexion, $actualizarConsulta2);
                        }
                    }
                    
                    if (!empty($row["pre_3"])){
                        echo "<div class='textoinformativo3'>Copia de:
                        <br> b. Publicación de convovatoria</div>";
                            $documento3 = '../' . $row["pre_3"];
                            $nombreArchivo3 = pathinfo($documento3, PATHINFO_FILENAME);
                            echo "<div class='textoinformativo4'>";
                            echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                            echo "<h9><a href='$documento3' target='_blank'>$nombreArchivo3.pdf</a></h9><br><br>";
                            echo '<div class="archivos">';
                            // Mostrar el formulario de aprobación/denegación
                            echo '<form method="POST">';
                            echo '<input type="hidden" name="id" value="' . $id . '">';
                            echo '<input type="hidden" name="documento" value="3">';
                            echo '<div class="archivo">';
                            // Botón de aprobación
                            echo '<input type="submit" class="boton-aprobar" name="aprobado3" value="Aprobado">';
                            echo '</div>';
                            echo '<div class="archivo">';
                            // Botón de denegación
                            echo '<input type="submit" class="boton-denegar" name="denegado3" value="Denegado">';
                            echo '</div>';
                            echo '</div>';
                            echo '</form>';
                            echo '</div>';
                        
                            // Comprobamos si se ha enviado el formulario
                            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '3') {
                                $estado3 = 0; // Valor inicial para evitar la variable indefinida
                        
                                if (isset($_POST['aprobado3'])) {
                                    $estado3 = 1; // Aprobado
                                } elseif (isset($_POST['denegado3'])) {
                                    $estado3 = 2; // Denegado
                                }
                        
                                // Actualizar el estado en la base de datos
                                $actualizarConsulta3 = "UPDATE pregrado SET aprobado_denegado_pre3 = '$estado3' WHERE id = $id";
                                $actualizarResultado3 = mysqli_query($conexion, $actualizarConsulta3);
                            }
                        }
                        
                    }
                    if (!empty($row["pre_4"])){
                        echo "<div class='textoinformativo3'>Copia de:
                        <br> c. Resultados finales</div>";
                            $documento4 = '../' . $row["pre_4"];
                            $nombreArchivo4 = pathinfo($documento4, PATHINFO_FILENAME);
                            echo "<div class='textoinformativo4'>";
                            echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                            echo "<h9><a href='$documento4' target='_blank'>$nombreArchivo4.pdf</a></h9><br><br>";
                            echo '<div class="archivos">';
                            // Mostrar el formulario de aprobación/denegación
                            echo '<form method="POST">';
                            echo '<input type="hidden" name="id" value="' . $id . '">';
                            echo '<input type="hidden" name="documento" value="4">';
                            echo '<div class="archivo">';
                            // Botón de aprobación
                            echo '<input type="submit" class="boton-aprobar" name="aprobado4" value="Aprobado">';
                            echo '</div>';
                            echo '<div class="archivo">';
                            // Botón de denegación
                            echo '<input type="submit" class="boton-denegar" name="denegado4" value="Denegado">';
                            echo '</div>';
                            echo '</div>';
                            echo '</form>';
                            echo '</div>';
                        
                            // Comprobamos si se ha enviado el formulario
                            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '4') {
                                $estado4 = 0; // Valor inicial para evitar la variable indefinida
                        
                                if (isset($_POST['aprobado4'])) {
                                    $estado4 = 1; // Aprobado
                                } elseif (isset($_POST['denegado4'])) {
                                    $estado4 = 2; // Denegado
                                }
                        
                                // Actualizar el estado en la base de datos
                                $actualizarConsulta4 = "UPDATE pregrado SET aprobado_denegado_pre4 = '$estado4' WHERE id = $id";
                                $actualizarResultado4 = mysqli_query($conexion, $actualizarConsulta4);
                            }
                        }
                        

                    if (!empty($row["pre_5"])){
                    echo "<div class='textoinformativo3'>Copia de: 
                        <br> d. Acta de resultadoso</div>";
                            $documento5 = '../' . $row["pre_5"];
                            $nombreArchivo5 = pathinfo($documento5, PATHINFO_FILENAME);
                            echo "<div class='textoinformativo4'>";
                            echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                            echo "<h9><a href='$documento5' target='_blank'>$nombreArchivo5.pdf</a></h9><br><br>";
                            echo '<div class="archivos">';
                            // Mostrar el formulario de aprobación/denegación
                            echo '<form method="POST">';
                            echo '<input type="hidden" name="id" value="' . $id . '">';
                            echo '<input type="hidden" name="documento" value="5">';
                            echo '<div class="archivo">';
                            // Botón de aprobación
                            echo '<input type="submit" class="boton-aprobar" name="aprobado5" value="Aprobado">';
                            echo '</div>';
                            echo '<div class="archivo">';
                            // Botón de denegación
                            echo '<input type="submit" class="boton-denegar" name="denegado5" value="Denegado">';
                            echo '</div>';
                            echo '</div>';
                            echo '</form>';
                            echo '</div>';
                        
                            // Comprobamos si se ha enviado el formulario
                            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '5') {
                                $estado5 = 0; // Valor inicial para evitar la variable indefinida
                        
                                if (isset($_POST['aprobado5'])) {
                                    $estado5 = 1; // Aprobado
                                } elseif (isset($_POST['denegado5'])) {
                                    $estado5 = 2; // Denegado
                                }
                        
                                // Actualizar el estado en la base de datos
                                $actualizarConsulta5 = "UPDATE pregrado SET aprobado_denegado_pre5 = '$estado5' WHERE id = $id";
                                $actualizarResultado5 = mysqli_query($conexion, $actualizarConsulta5);
                            }
                        }
                    }   

                    if (!empty($row["pre_6"])){
                        echo "<div class='textoinformativo3'>Certificado de estudio expedida por la División de registro académico de la UMNG o constancia de la Dirección del programa, donde conste que el estudiante está activo y que ha cursado el 70% del programa académico.</div>";
                
                        $documento6 = '../' . $row["pre_6"];
                        $nombreArchivo6 = pathinfo($documento6, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento6' target='_blank'>$nombreArchivo6.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="6">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado6" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado6" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';
                    
                        // Comprobamos si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '6') {
                            $estado6 = 0; // Valor inicial para evitar la variable indefinida
                    
                            if (isset($_POST['aprobado6'])) {
                                $estado6 = 1; // Aprobado
                            } elseif (isset($_POST['denegado6'])) {
                                $estado6 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta6 = "UPDATE pregrado SET aprobado_denegado_pre6 = '$estado6' WHERE id = $id";
                            $actualizarResultado6 = mysqli_query($conexion, $actualizarConsulta6);
                        }
                    }
                    

                    if (!empty($row["pre_7"])){
                        echo "<div class='textoinformativo3'>Carta de presentación del postulante indicando, el compromiso de trabajar en la línea de Investigación del proyecto que lo vincula, bajo la dirección del investigador principal del proyecto o un coinvestigador del mismo. Esta presentación debe ser firmada por el postulante, la Dirección del Programa y la decanatura respectiva.</div>";
                    
                        $documento7 = '../' . $row["pre_7"];
                        $nombreArchivo7 = pathinfo($documento7, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento7' target='_blank'>$nombreArchivo7.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="7">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado7" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado7" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';
                    
                        // Comprobamos si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '7') {
                            $estado7 = 0; // Valor inicial para evitar la variable indefinida
                    
                            if (isset($_POST['aprobado7'])) {
                                $estado7 = 1; // Aprobado
                            } elseif (isset($_POST['denegado7'])) {
                                $estado7 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta7 = "UPDATE pregrado SET aprobado_denegado_pre7 = '$estado7' WHERE id = $id";
                            $actualizarResultado7 = mysqli_query($conexion, $actualizarConsulta7);
                        }
                    }
                    

                    if (!empty($row["pre_8"])){
                    echo "<div class='textoinformativo3'>Certificación de estudios expedida por la División de registro académico de la UMNG, indicando un promedio del ultimo de semestre cursado igual o superior a cuatro punto cero (4.0), en una escala de notas de 0.0 a 5.0 o su equivalente a otros esquemas de evaluación.</div>";
                    if (!empty($row["pre_8"])){
                        echo "<div class='textoinformativo3'>Lista de chequeo Pregrado</div>";
                        $documento8 = '../' . $row["pre_8"];
                        $nombreArchivo8 = pathinfo($documento8, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento8' target='_blank'>$nombreArchivo8.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="8">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado8" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado8" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';
                    
                        // Comprobamos si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '8') {
                            $estado8 = 0; // Valor inicial para evitar la variable indefinida
                    
                            if (isset($_POST['aprobado8'])) {
                                $estado8 = 1; // Aprobado
                            } elseif (isset($_POST['denegado8'])) {
                                $estado8 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta8 = "UPDATE pregrado SET aprobado_denegado_pre8 = '$estado8' WHERE id = $id";
                            $actualizarResultado8 = mysqli_query($conexion, $actualizarConsulta8);
                        }
                    }
                    if (!empty($row["pre_9"])){
                        echo "<div class='textoinformativo3'>Carta de auto declaración del postulante indicando que no se encuentra vinculado a otro proyecto de investigación de la Universidad Militar Nueva Granada, no podrá tener vínculo laboral ni de prestación de servicios con la Universidad Militar Nueva Granada, ni recibir doble estímulo por concepto de auxiliar de investigación en cualquiera de sus categorías.</div>";
                    
                        $documento9 = '../' . $row["pre_9"];
                        $nombreArchivo9 = pathinfo($documento9, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento9' target='_blank'>$nombreArchivo9.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="9">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado9" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado9" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';
                    
                        // Comprobamos si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '9') {
                            $estado9 = 0; // Valor inicial para evitar la variable indefinida
                    
                            if (isset($_POST['aprobado9'])) {
                                $estado9 = 1; // Aprobado
                            } elseif (isset($_POST['denegado9'])) {
                                $estado9 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta9 = "UPDATE pregrado SET aprobado_denegado_pre9 = '$estado9' WHERE id = $id";
                            $actualizarResultado9 = mysqli_query($conexion, $actualizarConsulta9);
                        }
                    }
                    

                    if (!empty($row["pre_10"])){
                        echo "<div class='textoinformativo3'>Presentar fotocopia de Cédula de Ciudadanía vigente al 150% .</div>";
                        $documento10 = '../' . $row["pre_10"];
                        $nombreArchivo10 = pathinfo($documento10, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento10' target='_blank'>$nombreArchivo10.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="10">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado10" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado10" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';
                    
                        // Comprobamos si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '10') {
                            $estado10 = 0; // Valor inicial para evitar la variable indefinida
                    
                            if (isset($_POST['aprobado10'])) {
                                $estado10 = 1; // Aprobado
                            } elseif (isset($_POST['denegado10'])) {
                                $estado10 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta10 = "UPDATE pregrado SET aprobado_denegado_pre10 = '$estado10' WHERE id = $id";
                            $actualizarResultado10 = mysqli_query($conexion, $actualizarConsulta10);
                        }
                    }
                    

                    if (!empty($row["pre_11"])){
                        echo "<div class='textoinformativo3'>Presentar fotocopia del carnet estudiantil </div>";
                        $documento11 = '../' . $row["pre_11"];
                        $nombreArchivo11 = pathinfo($documento11, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento11' target='_blank'>$nombreArchivo11.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="11">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado11" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado11" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';
                    
                        // Comprobamos si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '11') {
                            $estado11 = 0; // Valor inicial para evitar la variable indefinida
                    
                            if (isset($_POST['aprobado11'])) {
                                $estado11 = 1; // Aprobado
                            } elseif (isset($_POST['denegado11'])) {
                                $estado11 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta11 = "UPDATE pregrado SET aprobado_denegado_pre11 = '$estado11' WHERE id = $id";
                            $actualizarResultado11 = mysqli_query($conexion, $actualizarConsulta11);
                        }
                    }
                    

                    if (!empty($row["pre_12"])){
                        echo "<div class='textoinformativo3'>Presentar formato de justificación </div>";
                        $documento12 = '../' . $row["pre_12"];
                        $nombreArchivo12 = pathinfo($documento12, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento12' target='_blank'>$nombreArchivo12.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="12">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado12" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado12" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';
                    
                        // Comprobamos si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '12') {
                            $estado12 = 0; // Valor inicial para evitar la variable indefinida
                    
                            if (isset($_POST['aprobado12'])) {
                                $estado12 = 1; // Aprobado
                            } elseif (isset($_POST['denegado12'])) {
                                $estado12 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta12 = "UPDATE pregrado SET aprobado_denegado_pre12 = '$estado12' WHERE id = $id";
                            $actualizarResultado12 = mysqli_query($conexion, $actualizarConsulta12);
                        }
                    
                    
                
                    

                    echo "</ul>";
                    echo "</div>";
                } else {
                    echo "Error en la consulta: " . mysqli_error($conexion);
                }
            } else {
                echo "Error en la conexión a la base de datos.";
            }
        } else {
            echo "<p>No se ha seleccionado ningún ID.</p>";
        }
        ?>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.ver-estudiante').on('click', function() {
                var id = $(this).data('id');
                obtenerDatosEstudiante(id);
            });
        });

        function obtenerDatosEstudiante(id) {
            // Redireccionar a la página index18.php enviando el ID como parámetro
            window.location.href = 'index24.php?id=' + id;
        }
    </script>
    
</body>
</html>