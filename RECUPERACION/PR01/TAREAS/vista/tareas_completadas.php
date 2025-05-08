<?php
require_once'../controlador/controlador.php';
session_start();

if (!$_SESSION['user']) {
    header('Location: ./index.php');
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas Completadas</title>
    <style>

        * {
            text-align: center;
        }
        table, td, th {
            border: 1px solid;
            padding: 10px;
            margin: auto;
            border-collapse: collapse;
        }
        a {
            text-decoration: none;
            color: blue;
            padding: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<h1>TAREAS COMPLETADAS</h1>
    <table>
        <thead>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Prioridad</th>
            <th>Tipo (Académica / Personal)</th>
            <th>Realizada</th>
            <th>Eliminar</th>
        </thead>

        <tbody>
            <!-- CUERPO DE LA TABLA PARA MOSTRAR LOS DATOS -->
            <?php
                try {
                    $tareas = selectTareasRealizadas();
                    foreach ($tareas as $fila) {
                        echo "<tr>";
                        echo "<td>". $fila['titulo']. "</td>";
                        echo "<td>". $fila['descripcion']. "</td>";
                        
                        // FECHA FORMATEADA (YYYY-mm-dd -> dd / mm / YYYY) => SUBSTR
                        echo "<td>".substr($fila['fecha'],8,2) ." / ". substr($fila['fecha'],5,2)." / ".   substr($fila['fecha'],0,4). "</td>";
                        echo "<td>". $fila['prioridad']. "</td>";
                        
                        // IMAGEN => BASE64_ENCODE
                        echo "<td><img height='100px' width='100px' src='data:image/jpeg;base64,".base64_encode($fila['img_tarea'])."' alt='Tipo de tarea'></td>";
                        // REALIZAR TAREA
                        echo "<td>SÍ</td>";
                        
                        echo "<td><a href='../controlador/eliminar_tarea.php?id=". $fila['id']. "'><button>Eliminar</button></a></td>";

                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    echo "Error: ".$e -> getMessage();
                }

            ?>
        </tbody>
    </table>
</body>
</html>