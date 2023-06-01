<?php
    include 'conexion.php';
    if($conexion){
        $consulta = "SELECT * FROM posgrado";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            while($row = $resultado->fetch_array()){
                $id = $row['id']; 
                $nombre = $row['nom_pos'];
                ?>
                <div>
                    <h5><?php echo $id . " " . $nombre; ?></h5>
                </div>
                <?php
            }
        }
    }
?>
