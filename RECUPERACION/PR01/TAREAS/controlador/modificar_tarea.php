<?php
require_once'./controlador.php';

$imagen_academico = "../resources/a.png";
$imagen_personal = "../resources/p.png";

$id = filtrado($_POST['id']) ?? '';
$titulo = filtrado($_POST['titulo']) ?? '';
$descripcion = filtrado($_POST['descripcion']) ?? '';
$fecha = filtrado($_POST['fecha']) ?? '';
$prioridad = filtrado($_POST['prioridad'])?? '';

if (isset($_POST['img_tarea'])) {
    // Elegir la imagen basada en el valor de 'img_tarea'
    if ($_POST['img_tarea'] == 'personal' && file_exists($imagen_personal)) {
        $img_tarea = file_get_contents($imagen_personal);
    } elseif ($_POST['img_tarea'] != 'personal' && file_exists($imagen_academico)) {
        $img_tarea = file_get_contents($imagen_academico);
    } else {
        // Si la imagen no existe, establecer un valor predeterminado o manejar el error
        echo "Error: La imagen no existe.";
    }
} else {
    // Si no se seleccionó 'img_tarea', podrías definir una imagen predeterminada o manejar el error
    echo "Error: No se seleccionó imagen.";
}


// COMPROBAR NOMBRE => ELIMINAR PRIMERO TAREA

try {
    
        $resultado = updateTarea($titulo, $descripcion, $fecha, $prioridad, $img_tarea);
        echo "<script>";
        echo "alert('La tarea ha sido modificada correctamente');";
        echo "setTimeout(() => {
            location.href='../vista/tareas.php';

        }, 2000);";

        echo "</script>";
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $conexion = null;
    header("Location:../vista/tareas.php");
}

?>