<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ../vista/index.php');
    
}

require_once './controlador.php';
    $conexion = conexion();
    //SUBIR EL TAMAÑO MAXIMO PERMITIDO (200 MB)
    $conexion ->exec("SET GLOBAL max_allowed_packet = 200 * 1024 * 1024;"); // 200 MB
    
    $titulo =  filtrado($_POST['titulo']) ?? '';
    $descripcion = filtrado($_POST['descripcion'])?? '';
    $fecha = date($_POST['fecha']) ?? '';
    $prioridad = intval(filtrado($_POST['prioridad']))?? '';
    $img_tarea = $_FILES['img_tarea'] ??  '';
    $realizada = $_POST['realizada'] ??  '';


    // CHEQUEAR QUE SE SUBIÓ BIEN EL img_tarea Y EL FORMATO
    if ($img_tarea && $img_tarea['error'] == 0) {
        $formatoLogo = strtolower(pathinfo($img_tarea['name'], PATHINFO_EXTENSION));
        $formato = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
        if (!in_array($formatoLogo, $formato)) {
            die("Tipo de archivo no permitido.");
        }
        // Obtener el contenido del archivo img_tarea
        $contenido_img_tarea = file_get_contents($img_tarea["tmp_name"]);
    } else {
        $contenido_img_tarea = NULL;
    }

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