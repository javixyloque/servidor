<?php
require_once'./controlador.php';

$id = filtrado($_GET['id'])?? '';
$archivo = "../vista/Javier/hechasJavier.txt";
try {
    realizarTarea($id);
    $tareaRealizada = selectTareaId($id);

    if (file_exists($archivo)) {
        $nuevaFila = " $tareaRealizada[titulo]: $tareaRealizada[descripcion]. Fecha:". substr($tareaRealizada['fecha'],8,2) ." / ". substr($tareaRealizada['fecha'],5,2)." / ".   substr($tareaRealizada['fecha'],0,4)." - Prioridad: $tareaRealizada[prioridad]" ;
        file_put_contents($archivo, $nuevaFila. "\n", FILE_APPEND);

    } else  {
        $contenido_archivo = "TAREAS REALIZADAS\n\n $tareaRealizada[titulo]: $tareaRealizada[descripcion]. Fecha:". substr($tareaRealizada['fecha'],8,2) ." / ". substr($tareaRealizada['fecha'],5,2)." / ".   substr($tareaRealizada['fecha'],0,4)." - Prioridad: $tareaRealizada[prioridad]" ;
        file_put_contents($archivo, $contenido_archivo. "\n");
    }
    sleep(3);
    echo "<h2>Tarea realizada correctamente.</h2><br><h3>Volviendo a las tareas ...</h3>";
    header("Location: ../vista/tareas.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>