<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Listado de proyectos</title>
</head>
<body>
    <h2>Listado de proyectos de DAW del CIFP Camino de la Miranda</h2>
    
    <table>
        <thead>
            <!-- <th>ID</th> -->
            <th>TITULO</th>
            <th>DESCRIPCIÓN</th>
            <th>PERIODO</th>
            <th>CURSO</th>
            <th>FECHA PRESENTACIÓN</th>
            <th>NOTA</th>
            <th>LOGOTIPO</th>
            <th>PDF_PROYECTO</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
        </thead>
        <tbody>
            <?php
                include '../conexion/conexion.php';
                $conexion = conexion();
            
                try {
                    $sql = "SELECT * FROM proyecto";
            
                    $sentencia = $conexion -> prepare($sql);
                    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
                    $sentencia -> execute();
            
            
                    while ($fila = $sentencia->fetch()) {
                        echo "<tr>";
                        // echo "<td>".$fila['id_proyecto']."</td>";
                        echo "<td>".$fila['titulo']."</td>";
                        echo "<td>".$fila['descripcion']."</td>";
                        echo "<td>".$fila['periodo']."</td>";
                        echo "<td>".$fila['curso']."</td>";
                        echo "<td>".$fila['fecha_presentacion']."</td>";
                        echo "<td>".$fila['nota']."</td>";
                        echo "<td><img height='100px' width='100px' src='data:image/jpeg;base64,".base64_encode($fila['logotipo'])."' alt='Logo'></td>";
                        echo "<td><a href='data:application/pdf;base64,".base64_encode($fila['pdf_proyecto'])." ' target='_blank'>Descargar PDF</a></td>";                                                
                        echo "<td><a href='editar.php?id=".$fila['id_proyecto']."'><button>Modificar</button></a></td>";
                        echo "<td><a href='eliminar.php?id=".$fila['id_proyecto']."'><button>Eliminar</button></a></td>";                        
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
        <button>Agregar proyecto</button>
    </a>
</body>
</html>




<?php 
    // $sentencia ->free();
    $conexion = null;
?>