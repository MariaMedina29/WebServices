<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Proceso de pregrado</title>
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
        <h2>PROCESO DE PREGRADO</h2>
        <hr class="linea">
        <div class="contenedorind16">
            <div class="proceso">
                Estudiante
                <?php
                    include('../mostrar_pre.php');
                ?>
            </div>
            <div class="proceso">
                Revisión
                <?php
                    include('../mostrar_pre_1.php');
                ?>
            </div>
        </div>
        <a href="index13.html">
            <div class="contenedor2">
                <button class="boton5">
                    <h10>Añadir</h10>
                </button>
            </div>
        </a>
    </main>
    
</body>
</html>