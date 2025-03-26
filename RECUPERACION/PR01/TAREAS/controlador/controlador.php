<?php



function conexion () {
    $servidor = 'mysql:dbname=tareas_javier;host=localhost;charset=utf8mb4';
    $usuario ='root';
    $pw = '';


    try {
        $conexion = new PDO($servidor, $usuario, $pw);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    } catch (PDOException $e) {
        echo 'Falló la conexión: '. $e->getMessage();

    }
}

function filtrado ($data) {
    $data = trim($data);
    // $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function nombreRepetido($titulo) {
    $conexion = conexion();
    $sql = "SELECT COUNT(*) FROM tareas WHERE titulo = :titulo";
    $select = $conexion ->prepare($sql);
    $select->bindParam(':titulo', $titulo, PDO::PARAM_STR);
    $select->execute();
    // PARA OBTENER EL NUMERO DE REGISTROS DIRECTAMENTE
    $contador = $select->fetchColumn();

    return $contador>0;

}

function selectTareasNoRealizadas () {
    $conexion = conexion();
    $sql = "SELECT * FROM tareas WHERE realizada = 0 ORDER BY prioridad ASC";
    $select = $conexion -> prepare($sql);
    $select->execute();
    $tareas = $select->fetchAll(PDO::FETCH_ASSOC);
    $conexion = null;
    return $tareas;
}

function insertTarea($titulo, $descripcion, $fecha, $prioridad, $img_tarea, $contenido_img_tarea) {
    $conexion = conexion();
    $insert = $conexion->prepare("INSERT INTO tareas (titulo, descripcion, fecha, prioridad, img_tarea) VALUES (:titulo, :descripcion,:fecha, :prioridad,   :img_tarea)");
    
    $insert->bindParam(':titulo', $titulo, PDO::PARAM_STR);
    $insert->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
    $insert->bindParam(':fecha', $fecha, PDO::PARAM_STR);
    $insert->bindParam(':prioridad', $prioridad, PDO::PARAM_INT);
    $insert->bindParam(':img_tarea', $contenido_img_tarea, PDO::PARAM_LOB);
    
    $resultado = $insert->execute();
    $conexion = null;
    return $resultado;


}


function updateTarea($titulo, $descripcion, $fecha, $prioridad,  $contenido_img_tarea) {
    $conexion = conexion();
    $insert = $conexion->prepare("INSERT INTO tareas (titulo, descripcion, fecha, prioridad, img_tarea) VALUES (:titulo, :descripcion,:fecha, :prioridad,   :img_tarea)");
    
    $insert->bindParam(':titulo', $titulo, PDO::PARAM_STR);
    $insert->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
    $insert->bindParam(':fecha', $fecha, PDO::PARAM_STR);
    $insert->bindParam(':prioridad', $prioridad, PDO::PARAM_INT);
    $insert->bindParam(':img_tarea', $contenido_img_tarea, PDO::PARAM_LOB);
    
    $resultado = $insert->execute();
    $conexion = null;
    return $resultado;


}



function eliminarTarea ($id) {
    $conexion = conexion();
    $sql = "DELETE FROM tareas WHERE id = :id";
    $delete = $conexion->prepare($sql);
    $delete->bindParam(':id', $id, PDO::PARAM_INT);
    $delete->execute();
    $conexion = null;
    return;
}


function selectTareaId($id) {
    $conexion = conexion();
    $sql = "SELECT * FROM tareas WHERE id = :id";
    $select = $conexion->prepare($sql);
    $select->bindParam(':id', $id, PDO::PARAM_INT);
    $select->execute();
    $tarea = $select->fetch(PDO::FETCH_ASSOC);
    $conexion = null;
    return $tarea;
}

function realizarTarea($id) {
    $conexion = conexion();
    $sql = "UPDATE tareas set realizada = 1 WHERE id = :id";
    $update = $conexion->prepare($sql);
    $update->bindParam(':id', $id, PDO::PARAM_INT);
    $update->execute();
    $conexion = null;
    return true;

}


?>