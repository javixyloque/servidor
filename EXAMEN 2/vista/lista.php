<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Listado de proyectos</title>
</head>
<body>
    <h2>Listado de tareas</h2>
    
    <table>
        <thead>
            <!-- <th>ID</th> -->
            <th>TITULO</th>
            <th>DESCRIPCIÓN</th>
            <th>FECHA</th>
            <th>PRIORIDAD</th>
            <th>IMAGEN</th>
            <th>REALIZADA?</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
            
        </thead>
        <tbody>
            <?php
                include '../conexion/conexion.php';
                $conexion = conexion();
            
                try {
                    $sql = "SELECT * FROM tareas WHERE realizada = FALSE ORDER BY prioridad ";
            
                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
                    $sentencia -> execute();
            
            
                    while ($fila = $sentencia->fetch()) {
                        echo "<tr>";
                        // echo "<td>".$fila['id_proyecto']."</td>";
                        echo "<td>".$fila['titulo']."</td>";
                        echo "<td>".$fila['descripcion']."</td>";
                        echo "<td>".$fila['fecha']."</td>";
                        echo "<td>".$fila['prioridad']."</td>";
                        echo "<td><img height='100px' width='100px' src='data:image/jpeg;base64,".base64_encode($fila['img_tarea'])."' alt='tipo_tarea'></td>";
                        echo "<td>".$fila['realizada']."</td>";
                        echo "<td><a href='./form_editar.php?id=".$fila['titulo']."'><button>Modificar</button></a></td>";
                        echo "<td><a href='../controlador/eliminar.php?id=".$fila['titulo']."'><button>Eliminar</button></a></td>";                        
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
        <button>Agregar tarea</button>
    </a>
</body>
</html>




<?php 
    // $sentencia ->free();
    $conexion = null;
?>