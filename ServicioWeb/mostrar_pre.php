<?php
    include 'conexion.php';
    if($conexion){
        $consulta = "SELECT * FROM pregrado";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            while($row = $resultado->fetch_array()){
                $id = $row['id']; 
                $nombre = $row['nom_pre'];
                ?>
                <div>
                    <h5><?php echo  $nombre; ?></h5>
                </div>
                <?php
            }
        }
    }
?>