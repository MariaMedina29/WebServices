<?php
    include 'conexion.php';
    if ($conexion) {
        $consulta = "SELECT * FROM posgrado";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $id = $row['id'];
                ?>
                <div>
                    <h5><a href="index25.php?id=<?php echo $id; ?>" class="ver-enlace">Ver</a></h5>
                </div>
                <?php
            }
        }
    }
?>

