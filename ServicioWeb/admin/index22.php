<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Proceso de posgrado</title>
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
        <h2>PROCESO DE POSGRADO</h2>
        <hr class="linea">
        <div class="contenedorind16">
            <div class="proceso">
                
                Estudiante<br><br>

                <?php
                    include('../mostrar_pos_admin.php');
                ?>
                
            </div>

            <div class="proceso">
                Revisión
                <?php
                    include('../mostrar_pos_1_admin.php');
                ?>
            </div>
        </div>
    </main>
    
</body>
</html>
