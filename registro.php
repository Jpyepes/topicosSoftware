<?php
    include("con_db.php");
    if(isset($_POST['registro'])){
        if(strlen($_POST['nombre']) >= 1){
            $nombre = trim($_POST['nombre']);
            $consulta = "INSERT INTO usuario(nombre) VALUES ('$nombre')";
            $resultado = mysqli_query($conexion, $consulta);
            if ($resultado){
                ?>
                 <span class="ok">Bienvenido </span>
                <?php
                echo "$nombre";
            }
            else{
                ?>
                <span class="notOk">Vuelve a hacer el registro</span>
               <?php 
            }
        }else{
            ?>
                <span class="notOk">Rellena los campos</span>
            <?php 
        }
    }
    header("Location: http://localhost/primerProyecto/index.html");
    exit();
?>