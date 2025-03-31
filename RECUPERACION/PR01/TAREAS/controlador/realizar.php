<?php
require_once'./controlador.php';

$id = filtrado($_GET['id'])?? '';

try {
    realizarTarea($id);
    sleep(3);
    echo "<h2>Tarea realizada correctamente.</h2><br><h3>Volviendo a las tareas ...</h3>";
    header("Location: ../vista/tareas.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>