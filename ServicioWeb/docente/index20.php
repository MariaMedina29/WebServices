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

                    echo "<div class='textoinformativo3'>Lista de chequeo Aux. posgrado.</div>";
                    $documento = '../' . $row["pos_1"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";
                    
                    // Mostrar el estado del documento
                    $estado1 = $row["aprobado_denegado_pos1"];
                    if ($estado1 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado1 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado1 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }
                    

                    echo "<div class='textoinformativo3'>Copia de la convocatoria vinculación estímulo económico a estidiantes.</div>";
                    $documento = '../' . $row["pos_2"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado2 = $row["aprobado_denegado_pos2"];
                    if ($estado2 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado2 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado2 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Copia del pantallazo publicación convocatoria.</div>";
                    $documento = '../' . $row["pos_3"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado3 = $row["aprobado_denegado_pos3"];
                    if ($estado3 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado3 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado3 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Copia del pantallazo resultados finales.</div>";
                    $documento = '../' . $row["pos_4"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado4 = $row["aprobado_denegado_pos4"];
                    if ($estado4 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado4 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado4 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Copia de acta de evaluación de candidatos.</div>";
                    $documento = '../' . $row["pos_5"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado5 = $row["aprobado_denegado_pos5"];
                    if ($estado5 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado5 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado5 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Certificación, por parte de la Divisón de Registro Académico indicando que se encuentra matriculado y activo en un programa de maestría o doctorado de la UMNG.</div>";
                    $documento = '../' . $row["pos_6"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado6 = $row["aprobado_denegado_pos6"];
                    if ($estado6 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado6 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado6 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Certificación de registro académico para los estudiantes inscritos en primer semestre de un programa de doctorado o maestría en la UMNG deberán certificar un promedio general acomulado de pregrado  o maestría igual o superior a tres punto seis (3.6), en una escala de notas 0.0 a 5.0 o su equivalente a otros esquemas de evaluación.</div>";
                    $documento = '../' . $row["pos_7"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado7 = $row["aprobado_denegado_pos7"];
                    if ($estado7 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado7 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado7 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Certificación de registro académico para los estudiantes inscritos en segundo semestre o superior de un programa de doctorado o maestría en la UMNG deberán certificar un promedio de último semestre cursado, igual o superior a cuatro punto cero (4.0), en una escala de notas 0.0 a 5.0 o su equivalente a otros esquemas de evaluación.</div>";
                    $documento = '../' . $row["pos_8"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado8 = $row["aprobado_denegado_pos8"];
                    if ($estado8 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado8 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado8 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Presentación del postulante, firmada por parte del lider del proyecto Viíncularse a un  proyecto de inverstigación de la UMNG, debidamente aprobado y financiado, que cuente con recursos por el rubro de estímulo a estudiantes en la modalidad de auxiliar de investigación de posgrado.</div>";
                    $documento = '../' . $row["pos_9"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado9 = $row["aprobado_denegado_pos9"];
                    if ($estado9 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado9 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado9 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Carta e presentación del postulante indicando el compromiso de trabajar en la línea de investigación del proyecto que lo vincula, especificando que el desempeño como Auxiliar no interfiere con el normal desarrollo de su actividad académica.Bajo la dirección del investigador principal del proyecto o un coinvestigador del mismo.Esta presentación debe ser avalada por la dirección por la dirección de posgrados y la decanatura respectiva.</div>";
                    $documento = '../' . $row["pos_10"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado10 = $row["aprobado_denegado_pos10"];
                    if ($estado10 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado10 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado10 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>
                        Carta de auto declaración de postulante donde se indique:
                        <br> a. No haber recibido previamente el beneficio durante más de dos años consecutivos o no consecutivos.
                        <br> b. No haber recibido previamente dos estímulos.
                        <br> c. Se está formando en una área afin con las actividades que va a desempeñar en el proyecto que lo vincula.
                        <br> d. No podrá recibir ningún otro tipo de estímulo a las modalidades para participación de personal.
                    </div>";
                    $documento = '../' . $row["pos_11"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado11 = $row["aprobado_denegado_pos11"];
                    if ($estado11 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado11 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado11 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Presentar el plan de trabajo proyectado para el periodo correspondiente, avalado por el líder del proyecto de investigación  en la maestría o doctorado respectivo. </div>";
                    $documento = '../' . $row["pos_12"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado12 = $row["aprobado_denegado_pos12"];
                    if ($estado12 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado12 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado12 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Presentar fotocopia de cédula de ciudadanía vigente al 150%.</div>";
                    $documento = '../' . $row["pos_13"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado13 = $row["aprobado_denegado_pos13"];
                    if ($estado13 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado13 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado13 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'>Presentar fotocopia del carnet estudiantil.</div>";
                    $documento = '../' . $row["pos_14"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado14 = $row["aprobado_denegado_pos14"];
                    if ($estado14 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado14 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado14 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'> Presentar formato de justificación.</div>";
                    $documento = '../' . $row["pos_15"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado15 = $row["aprobado_denegado_pos15"];
                    if ($estado15 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado15 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado15 == 2) {
                        echo "<div class='estado'>Estado: Denegado</div>";
                    }

                    echo "<div class='textoinformativo3'> Pantallazo de la requisición de univex.</div>";
                    $documento = '../' . $row["pos_16"];
                    $nombreArchivo = pathinfo($documento, PATHINFO_FILENAME);
                    echo "<div class='textoinformativo4'>";
                    echo "<img src='../img/Documentos.png' alt='' class='imagen10'>";
                    echo "<h9><a href='$documento' target='_blank'>$nombreArchivo.pdf</a></h9><br><br>";
                    echo "</div>";

                    $estado16 = $row["aprobado_denegado_pos16"];
                    if ($estado16 == 0) {
                        echo "<div class='estado'>Estado: En proceso</div>";
                    } elseif ($estado16 == 1) {
                        echo "<div class='estado'>Estado: Aprobado</div>";
                    } elseif ($estado16 == 2) {
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

