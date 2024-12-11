<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Listado de proyectos</title>
</head>
<body>
    <h2>REBAJAS</h2>
    
    <table>
        <thead>
            <!-- <th>ID</th> -->
            <th>ID_PRENDA</th>
            <th>PRENDA</th>
            <th>FOTO</th>
            <th>PRECIO</th>
            <th>REBAJADA</th>
            <th>REBAJA</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
        </thead>
        <tbody>
            <?php
                include '../conexion/conexion.php';
                $conexion = conexion();
            
                try {
                    $sql = "SELECT * FROM rebajas_javier";
            
                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
                    $sentencia -> execute();
                    
            
                    while ($fila = $sentencia->fetch()) {
                        echo "<tr>";
                        // echo "<td>".$fila['id_proyecto']."</td>";
                        $nuevaR = $fila['rebajada'] == 1 ? 'SÍ': 'NO';
                        echo "<td>".$fila['id_prenda']."</td>";
                        echo "<td>".$fila['prenda']."</td>";
                        echo "<td><img height='100px' width='100px' src='data:image/jpeg;base64,".base64_encode($fila['foto'])."' alt='Logo'></td>";                                           
                        echo "<td>".$fila['precio']."</td>";
                        echo "<td>".$nuevaR."</td>";
                        echo "<td>".$fila['rebaja']."%</td>";
                        echo "<td><a href='./form_editar.php?id=".$fila['id_prenda']."'><button>Modificar</button></a></td>";
                        echo "<td><a href='../controlador/eliminar.php?id=".$fila['id_prenda']."'><button>Eliminar</button></a></td>";                        
                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    echo $e ->getMessage();
                } finally {
                    $conexion = null;
                }
            
            ?>
        </tbody>
        
    </table>
    <a href="form_subir.php">
        <button>Agregar producto</button>
    </a>
</body>
</html>




<?php 
    // $sentencia ->free();
    $conexion = null;
?>