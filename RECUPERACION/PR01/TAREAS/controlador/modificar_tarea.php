<?php
require_once'./controlador.php';

$id = filtrado($_POST['id']) ?? '';
$titulo = filtrado($_POST['titulo']) ?? '';
$descripcion = filtrado($_POST['descripcion']) ?? '';
$fecha = filtrado($_POST['fecha']) ?? '';
$prioridad = filtrado($_POST['prioridad'])?? '';
$img_tarea = $_FILES['img_tarea']['name']?? '';
$contenido_img_tarea = $_FILES['img_tarea']['tmp_name']?? '';



try {
    if (nombreRepetido($titulo)) {
        die("El título de la tarea ya existe. <a href='../vista/tareas.php'>VOLVER A LAS TAREAS</a>");
    } else {
        $resultado = insertTarea($titulo, $descripcion, $fecha, $prioridad, $img_tarea, $contenido_img_tarea);

    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $conexion = null;
    header("Location:../vista/tareas.php");
}

?>