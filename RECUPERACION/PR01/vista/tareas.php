<?php
require_once'../controlador/controlador.php';
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
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
    </style>
</head>
<body>
    <h1>TAREAS SIN COMPLETAR</h1>
    <table>
        <thead>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Prioridad</th>
            <th>Tipo (Académica / Personal)</th>
            <th>Realizada</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </thead>

        <tbody>
            <!-- CUERPO DE LA TABLA PARA MOSTRAR LOS DATOS -->
            <?php
                try {
                    $tareas = selectTareasNoRealizadas();
                    foreach ($tareas as $fila) {
                        echo "<tr>";
                        echo "<td>". $fila['titulo']. "</td>";
                        echo "<td>". $fila['descripcion']. "</td>";
                        echo "<td>". $fila['fecha']. "</td>";
                        echo "<td>". $fila['prioridad']. "</td>";
                        echo "<td><img height='100px' width='100px' src='data:image/jpeg;base64,".base64_encode($fila['img_tarea'])."' alt='Tipo de tarea'></td>";
                        echo "<td><a href='../controlador/realizar.php?id=".$fila['id']"'>Terminar</a></td>";

                        echo "<td><a href='./form_editar.php?id=". $fila['id']. "'><button>Modificar</button></a></td>";
                        echo "<td><a href='../controlador/eliminar_tarea.php?id=". $fila['id']. "'><button>Eliminar</button></a></td>";

                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    echo "Error: ".$e -> getMessage();
                }

            ?>
        </tbody>
    </table>

    <a href="./form_anadir.html">
        AGREGAR NUEVA TAREA
    </a>
    
</body>
</html>