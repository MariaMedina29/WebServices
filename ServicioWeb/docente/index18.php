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

                    echo "<div class='textoinformativo3'>Lista de chequeo Pregrado</div>";
                    $documento = '../' . $row["pre_1"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    // Mostrar el estado del documento
                    $estado1 = $row["aprobado_denegado_pre1"];
                    if ($estado1 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado1 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado1 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Copia de la convocatoria
                    <br> a.Convocatoria vinculación estímulo económico a estudiantes</div>";
                    $documento = '../' . $row["pre_2"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    // Mostrar el estado del documento
                    $estado2 = $row["aprobado_denegado_pre2"];
                    if ($estado2 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado2 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado2 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Copia de:
                        <br> b. Publicación de convovatoria</div>";
                    $documento = '../' . $row["pre_3"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    // Mostrar el estado del documento
                    $estado3 = $row["aprobado_denegado_pre3"];
                    if ($estado3 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado3 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado3 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Copia de:
                        <br> c. Resultados finales</div>";
                    $documento = '../' . $row["pre_4"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    // Mostrar el estado del documento
                    $estado4 = $row["aprobado_denegado_pre4"];
                    if ($estado4 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado4 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado4 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Copia de: 
                        <br> d. Acta de resultadoso</div>";
                    $documento = '../' . $row["pre_5"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    // Mostrar el estado del documento
                    $estado5 = $row["aprobado_denegado_pre5"];
                    if ($estado5 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado5 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado5 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Certificado de estudio expedida por la División de registro académico de la UMNG o constancia de la Dirección del programa, donde conste que el estudiante está activo y que ha cursado el 70% del programa académico.</div>";
                    $documento = '../' . $row["pre_6"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    // Mostrar el estado del documento
                    $estado6 = $row["aprobado_denegado_pre6"];
                    if ($estado6 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado6 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado6 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Carta de presentación del postulante indicando, el compromiso de trabajar en la línea de Investigación del proyecto que lo vincula, bajo la dirección del investigador principal del proyecto o un coinvestigador del mismo. Esta presentación debe ser firmada por el postulante, la Dirección del Programa y la decanatura respectiva.</div>";
                    $documento = '../' . $row["pre_7"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    // Mostrar el estado del documento
                    $estado7 = $row["aprobado_denegado_pre7"];
                    if ($estado7 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado7 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado7 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Certificación de estudios expedida por la División de registro académico de la UMNG, indicando un promedio del ultimo de semestre cursado igual o superior a cuatro punto cero (4.0), en una escala de notas de 0.0 a 5.0 o su equivalente a otros esquemas de evaluación.</div>";
                    $documento = '../' . $row["pre_8"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    // Mostrar el estado del documento
                    $estado8 = $row["aprobado_denegado_pre8"];
                    if ($estado8 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado8 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado8 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Carta de auto declaración del postulante indicando que no se encuentra vinculado a otro proyecto de investigación de la Universidad Militar Nueva Granada, no podrá tener vínculo laboral ni de prestación de servicios con la Universidad Militar Nueva Granada, ni recibir doble estímulo por concepto de auxiliar de investigación en cualquiera de sus categorías.</div>";
                    $documento = '../' . $row["pre_9"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    // Mostrar el estado del documento
                    $estado9 = $row["aprobado_denegado_pre9"];
                    if ($estado9 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado9 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado9 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Presentar fotocopia de Cédula de Ciudadanía vigente al 150% .</div>";
                    $documento = '../' . $row["pre_10"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    // Mostrar el estado del documento
                    $estado10 = $row["aprobado_denegado_pre10"];
                    if ($estado10 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado10 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado10 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Presentar fotocopia del carnet estudiantil </div>";
                    $documento = '../' . $row["pre_11"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    // Mostrar el estado del documento
                    $estado11 = $row["aprobado_denegado_pre11"];
                    if ($estado11 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado11 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado11 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Presentar formato de justificación </div>";
                    $documento = '../' . $row["pre_12"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    // Mostrar el estado del documento
                    $estado12 = $row["aprobado_denegado_pre12"];
                    if ($estado12 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado12 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado12 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
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
            window.location.href = 'index18.php?id=' + id;
        }
    </script>
    
</body>
</html>

