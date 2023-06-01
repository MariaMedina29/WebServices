<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Subir documentos posgrado</title>
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
                $consulta = "SELECT * FROM posgrado WHERE id = '$id'";
                $resultado = mysqli_query($conexion, $consulta);
                if ($resultado) {
                    $row = $resultado->fetch_assoc();
                    // Mostrar los datos de la fila
                    echo "<div class='proceso1'>";
                    echo "Estudiante: " . $row['nom_pos'];
                    echo "</div>";
                    echo "<br><br>";
                    echo "<div class='proceso1'>";
                    echo "Correo: " . $row['correo_pos'];
                    echo "</div>";
                    echo "<br><br>";
                    echo "<div class='proceso1'>";
                    echo "Código: " . $row['cod_pos'];
                    echo "</div>";
                    echo "<br><br>";
                    echo "<div class='proceso1'>";
                    echo "Pregrado: " . $row['pos'];
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
                $consulta = "SELECT * FROM posgrado WHERE id = '$id'";
                $resultado = mysqli_query($conexion, $consulta);
                if ($resultado) {
                    $row = $resultado->fetch_assoc();
                    // Mostrar los documentos subidos
                    echo "<div class='proceso1'>";
                    echo "<ul>";

                    // Primer documento
                    if (!empty($row["pos_1"])) {
                        echo "<div class='textoinformativo3'>Lista de chequeo Aux. posgrado.</div>";
                        $documento1 = '../' . $row["pos_1"];
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
                            $actualizarConsulta1 = "UPDATE posgrado SET aprobado_denegado_pos1 = '$estado1' WHERE id = $id";
                            $actualizarResultado1 = mysqli_query($conexion, $actualizarConsulta1);
                        }
                    }

                    // Segundo documento
                    if (!empty($row["pos_2"])) {
                        echo "<div class='textoinformativo3'>Copia de la convocatoria vinculación estímulo económico a estudiantes.</div>";
                        $documento2 = '../' . $row["pos_2"];
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
                            $actualizarConsulta2 = "UPDATE posgrado SET aprobado_denegado_pos2 = '$estado2' WHERE id = $id";
                            $actualizarResultado2 = mysqli_query($conexion, $actualizarConsulta2);
                        }
                    }

                    if (!empty($row["pos_3"])) {
                        echo "<div class='textoinformativo3'>Copia del pantallazo publicación convocatoria.</div>";
                        $documento3 = '../' . $row["pos_3"];
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
                            $actualizarConsulta3 = "UPDATE posgrado SET aprobado_denegado_pos3 = '$estado3' WHERE id = $id";
                            $actualizarResultado3 = mysqli_query($conexion, $actualizarConsulta3);
                        }
                    }


                    if (!empty($row["pos_4"])) {
                        echo "<div class='textoinformativo3'>Copia del pantallazo resultados finales.</div>";
                        $documento4 = '../' . $row["pos_4"];
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
                            $actualizarConsulta4 = "UPDATE posgrado SET aprobado_denegado_pos4 = '$estado4' WHERE id = $id";
                            $actualizarResultado4 = mysqli_query($conexion, $actualizarConsulta4);
                        }
                    }                        

                    if (!empty($row["pos_5"])) {
                    echo "<div class='textoinformativo3'>Copia de acta de evaluación de candidatos.</div>";
                        $documento5 = '../' . $row["pos_5"];
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
                    
                        // Comprobar si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '5') {
                            $estado5 = 0; // Valor inicial para evitar una variable indefinida
                    
                            if (isset($_POST['aprobado5'])) {
                                $estado5 = 1; // Aprobado
                            } elseif (isset($_POST['denegado5'])) {
                                $estado5 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta5 = "UPDATE posgrado SET aprobado_denegado_pos5 = '$estado5' WHERE id = $id";
                            $actualizarResultado5 = mysqli_query($conexion, $actualizarConsulta5);
                        }
                    }
                    

                    if (!empty($row["pos_6"])) {
                        echo "<div class='textoinformativo3'>Certificación, por parte de la Divisón de Registro Académico indicando que se encuentra matriculado y activo en un programa de maestría o doctorado de la UMNG.</div>";
                        $documento6 = '../' . $row["pos_6"];
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

                        // Comprobar si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '6') {
                            $estado6 = 0; // Valor inicial para evitar una variable indefinida

                            if (isset($_POST['aprobado6'])) {
                                $estado6 = 1; // Aprobado
                            } elseif (isset($_POST['denegado6'])) {
                                $estado6 = 2; // Denegado
                            }

                            // Actualizar el estado en la base de datos
                            $actualizarConsulta6 = "UPDATE posgrado SET aprobado_denegado_pos6 = '$estado6' WHERE id = $id";
                            $actualizarResultado6 = mysqli_query($conexion, $actualizarConsulta6);
                        }
                    }

                    if (!empty($row["pos_7"])) {
                        echo "<div class='textoinformativo3'>Certificación de registro académico para los estudiantes inscritos en primer semestre de un programa de doctorado o maestría en la UMNG deberán certificar un promedio general acomulado de pregrado  o maestría igual o superior a tres punto seis (3.6), en una escala de notas 0.0 a 5.0 o su equivalente a otros esquemas de evaluación.</div>";
                        $documento7 = '../' . $row["pos_7"];
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

                        // Comprobar si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '7') {
                            $estado7 = 0; // Valor inicial para evitar una variable indefinida

                            if (isset($_POST['aprobado7'])) {
                                $estado7 = 1; // Aprobado
                            } elseif (isset($_POST['denegado7'])) {
                                $estado7 = 2; // Denegado
                            }

                            // Actualizar el estado en la base de datos
                            $actualizarConsulta7 = "UPDATE posgrado SET aprobado_denegado_pos7 = '$estado7' WHERE id = $id";
                            $actualizarResultado7 = mysqli_query($conexion, $actualizarConsulta7);
                        }
                    }

                    if (!empty($row["pos_8"])) {
                        echo "<div class='textoinformativo3'>Certificación de registro académico para los estudiantes inscritos en segundo semestre o superior de un programa de doctorado o maestría en la UMNG deberán certificar un promedio de último semestre cursado, igual o superior a cuatro punto cero (4.0), en una escala de notas 0.0 a 5.0 o su equivalente a otros esquemas de evaluación.</div>";
                        $documento8 = '../' . $row["pos_8"];
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

                        // Comprobar si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '8') {
                            $estado8 = 0; // Valor inicial para evitar una variable indefinida

                            if (isset($_POST['aprobado8'])) {
                                $estado8 = 1; // Aprobado
                            } elseif (isset($_POST['denegado8'])) {
                                $estado8 = 2; // Denegado
                            }

                            // Actualizar el estado en la base de datos
                            $actualizarConsulta8 = "UPDATE posgrado SET aprobado_denegado_pos8 = '$estado8' WHERE id = $id";
                            $actualizarResultado8 = mysqli_query($conexion, $actualizarConsulta8);
                        }
                    }

                    if (!empty($row["pos_9"])) {
                        echo "<div class='textoinformativo3'>Presentación del postulante, firmada por parte del lider del proyecto Viíncularse a un  proyecto de inverstigación de la UMNG, debidamente aprobado y financiado, que cuente con recursos por el rubro de estímulo a estudiantes en la modalidad de auxiliar de investigación de posgrado.</div>";
                        $documento9 = '../' . $row["pos_9"];
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

                        // Comprobar si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '9') {
                            $estado9 = 0; // Valor inicial para evitar una variable indefinida

                            if (isset($_POST['aprobado9'])) {
                                $estado9 = 1; // Aprobado
                            } elseif (isset($_POST['denegado9'])) {
                                $estado9 = 2; // Denegado
                            }

                            // Actualizar el estado en la base de datos
                            $actualizarConsulta9 = "UPDATE posgrado SET aprobado_denegado_pos9 = '$estado9' WHERE id = $id";
                            $actualizarResultado9 = mysqli_query($conexion, $actualizarConsulta9);
                        }
                    }

                    if (!empty($row["pos_10"])) {
                        echo "<div class='textoinformativo3'>Carta e presentación del postulante indicando el compromiso de trabajar en la línea de investigación del proyecto que lo vincula, especificando que el desempeño como Auxiliar no interfiere con el normal desarrollo de su actividad académica.Bajo la dirección del investigador principal del proyecto o un coinvestigador del mismo.Esta presentación debe ser avalada por la dirección por la dirección de posgrados y la decanatura respectiva.</div>";
                        $documento10 = '../' . $row["pos_10"];
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

                        // Comprobar si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '10') {
                            $estado10 = 0; // Valor inicial para evitar una variable indefinida

                            if (isset($_POST['aprobado10'])) {
                                $estado10 = 1; // Aprobado
                            } elseif (isset($_POST['denegado10'])) {
                                $estado10 = 2; // Denegado
                            }

                            // Actualizar el estado en la base de datos
                            $actualizarConsulta10 = "UPDATE posgrado SET aprobado_denegado_pos10 = '$estado10' WHERE id = $id";
                            $actualizarResultado10 = mysqli_query($conexion, $actualizarConsulta10);
                        }
                    }

                    if (!empty($row["pos_11"])) {
                        echo "<div class='textoinformativo3'>
                            Carta de auto declaración de postulante donde se indique:
                            <br> a. No haber recibido previamente el beneficio durante más de dos años consecutivos o no consecutivos.
                            <br> b. No haber recibido previamente dos estímulos.
                            <br> c. Se está formando en una área afin con las actividades que va a desempeñar en el proyecto que lo vincula.
                            <br> d. No podrá recibir ningún otro tipo de estímulo a las modalidades para participación de personal.
                        </div>";
                    
                        $documento11 = '../' . $row["pos_11"];
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
                    
                        // Comprobar si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '11') {
                            $estado11 = 0; // Valor inicial para evitar una variable indefinida
                    
                            if (isset($_POST['aprobado11'])) {
                                $estado11 = 1; // Aprobado
                            } elseif (isset($_POST['denegado11'])) {
                                $estado11 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta11 = "UPDATE posgrado SET aprobado_denegado_pos11 = '$estado11' WHERE id = $id";
                            $actualizarResultado11 = mysqli_query($conexion, $actualizarConsulta11);
                        }
                    }
                    

                    if (!empty($row["pos_12"])) {
                        echo "<div class='textoinformativo3'>Presentar el plan de trabajo proyectado para el periodo correspondiente, avalado por el líder del proyecto de investigación  en la maestría o doctorado respectivo. </div>";
                        $documento12 = '../' . $row["pos_12"];
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
                    
                        // Comprobar si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '12') {
                            $estado12 = 0; // Valor inicial para evitar una variable indefinida
                    
                            if (isset($_POST['aprobado12'])) {
                                $estado12 = 1; // Aprobado
                            } elseif (isset($_POST['denegado12'])) {
                                $estado12 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta12 = "UPDATE posgrado SET aprobado_denegado_pos12 = '$estado12' WHERE id = $id";
                            $actualizarResultado12 = mysqli_query($conexion, $actualizarConsulta12);
                        }
                    }
                    

                    if (!empty($row["pos_13"])) {
                        echo "<div class='textoinformativo3'>Presentar fotocopia de cédula de ciudadanía vigente al 150%.</div>";
                        $documento13 = '../' . $row["pos_13"];
                        $nombreArchivo13 = pathinfo($documento13, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento13' target='_blank'>$nombreArchivo13.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="13">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado13" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado13" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';
                    
                        // Comprobar si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '13') {
                            $estado13 = 0; // Valor inicial para evitar una variable indefinida
                    
                            if (isset($_POST['aprobado13'])) {
                                $estado13 = 1; // Aprobado
                            } elseif (isset($_POST['denegado13'])) {
                                $estado13 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta13 = "UPDATE posgrado SET aprobado_denegado_pos13 = '$estado13' WHERE id = $id";
                            $actualizarResultado13 = mysqli_query($conexion, $actualizarConsulta13);
                        }
                    }
                    

                    if (!empty($row["pos_14"])) {
                        echo "<div class='textoinformativo3'>Presentar fotocopia del carnet estudiantil.</div>";
                        $documento14 = '../' . $row["pos_14"];
                        $nombreArchivo14 = pathinfo($documento14, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento14' target='_blank'>$nombreArchivo14.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="14">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado14" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado14" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';
                    
                        // Comprobar si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '14') {
                            $estado14 = 0; // Valor inicial para evitar una variable indefinida
                    
                            if (isset($_POST['aprobado14'])) {
                                $estado14 = 1; // Aprobado
                            } elseif (isset($_POST['denegado14'])) {
                                $estado14 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta14 = "UPDATE posgrado SET aprobado_denegado_pos14 = '$estado14' WHERE id = $id";
                            $actualizarResultado14 = mysqli_query($conexion, $actualizarConsulta14);
                        }
                    }
                    

                    if (!empty($row["pos_15"])) {
                        echo "<div class='textoinformativo3'> Presentar formato de justificación.</div>";
                        $documento15 = '../' . $row["pos_15"];
                        $nombreArchivo15 = pathinfo($documento15, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento15' target='_blank'>$nombreArchivo15.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="15">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado15" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado15" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';
                    
                        // Comprobar si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '15') {
                            $estado15 = 0; // Valor inicial para evitar una variable indefinida
                    
                            if (isset($_POST['aprobado15'])) {
                                $estado15 = 1; // Aprobado
                            } elseif (isset($_POST['denegado15'])) {
                                $estado15 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta15 = "UPDATE posgrado SET aprobado_denegado_pos15 = '$estado15' WHERE id = $id";
                            $actualizarResultado15 = mysqli_query($conexion, $actualizarConsulta15);
                        }
                    }
                    

                    if (!empty($row["pos_16"])) {
                        echo "<div class='textoinformativo3'> Pantallazo de la requisición de univex.</div>";
                        $documento16 = '../' . $row["pos_16"];
                        $nombreArchivo16 = pathinfo($documento16, PATHINFO_FILENAME);
                        echo "<div class='textoinformativo4'>";
                        echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                        echo "<h9><a href='$documento16' target='_blank'>$nombreArchivo16.pdf</a></h9><br><br>";
                        echo '<div class="archivos">';
                        // Mostrar el formulario de aprobación/denegación
                        echo '<form method="POST">';
                        echo '<input type="hidden" name="id" value="' . $id . '">';
                        echo '<input type="hidden" name="documento" value="16">';
                        echo '<div class="archivo">';
                        // Botón de aprobación
                        echo '<input type="submit" class="boton-aprobar" name="aprobado16" value="Aprobado">';
                        echo '</div>';
                        echo '<div class="archivo">';
                        // Botón de denegación
                        echo '<input type="submit" class="boton-denegar" name="denegado16" value="Denegado">';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                        echo '</div>';
                    
                        // Comprobar si se ha enviado el formulario
                        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['documento']) && $_POST['documento'] === '16') {
                            $estado16 = 0; // Valor inicial para evitar una variable indefinida
                    
                            if (isset($_POST['aprobado16'])) {
                                $estado16 = 1; // Aprobado
                            } elseif (isset($_POST['denegado16'])) {
                                $estado16 = 2; // Denegado
                            }
                    
                            // Actualizar el estado en la base de datos
                            $actualizarConsulta16 = "UPDATE posgrado SET aprobado_denegado_pos16 = '$estado16' WHERE id = $id";
                            $actualizarResultado16 = mysqli_query($conexion, $actualizarConsulta16);
                        }
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

        // Definir y asignar valores a la variable $archivos
        $archivos = [
            $row["pos_1"],
            $row["pos_2"],
            $row["pos_3"],
            $row["pos_4"],
            $row["pos_5"],
            $row["pos_6"],
            $row["pos_7"],
            $row["pos_8"],
            $row["pos_9"],
            $row["pos_10"],
            $row["pos_11"],
            $row["pos_12"],
            $row["pos_13"],
            $row["pos_14"],
            $row["pos_15"],
            $row["pos_16"]
        ];

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
            window.location.href = 'index18.php?id=' + id;
        }
    </script>
    
</body>
</html>

