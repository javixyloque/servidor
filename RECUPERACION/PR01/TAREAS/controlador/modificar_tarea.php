<?php
require_once'./controlador.php';

$imagen_academico = "../resources/a.png";
$imagen_personal = "../resources/p.png";

$id = filtrado($_POST['id']) ?? '';
$titulo = filtrado($_POST['titulo']) ?? '';
$descripcion = filtrado($_POST['descripcion']) ?? '';
$fecha = filtrado($_POST['fecha']) ?? '';
$prioridad = intval(filtrado($_POST['prioridad'])) ?? '';

if (isset($_POST['img_tarea'])) {
    // Elegir la imagen basada en el valor de 'img_tarea'
    if ($_POST['img_tarea'] == 'personal' && file_exists($imagen_personal)) {
        $img_tarea = file_get_contents($imagen_personal);
    } elseif ($_POST['img_tarea'] == 'academico' && file_exists($imagen_academico)) {
        $img_tarea = file_get_contents($imagen_academico);
    } else {
        
        echo "Error: La imagen no existe.";
    }
} else {
    
    echo "Error: No se seleccionó imagen.";
}


// COMPROBAR NOMBRE => ELIMINAR PRIMERO TAREA

try {
    
        $resultado = updateTarea($id, $titulo, $descripcion, $fecha, $prioridad, $img_tarea);
        echo "<script>alert('La tarea ha sido modificada correctamente, redirigiendo...');
        window.location.href='../vista/tareas.php';        
        </script>";
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} 

?>