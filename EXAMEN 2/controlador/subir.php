<?php
    require_once '../conexion/conexion.php';
    $conexion = conexion();
    // SUBIR EL TAMAÑO MAXIMO PERMITIDO (200 MB)
    $conexion ->exec("SET GLOBAL max_allowed_packet = 200 * 1024 * 1024;"); // 200 MB
    
    $titulo = isset($_POST['titulo'])? filtrado($_POST['titulo']): '';
    $descripcion = isset($_POST['descripcion'])? filtrado($_POST['descripcion']): '';
    $fecha = isset($_POST['fecha'])? filtrado($_POST['fecha']): '';
    $prioridad = isset($_POST['prioridad'])? intval(filtrado($_POST['prioridad'])): '';
    $imagen = isset($_FILES['imagen']) ? $_FILES['imagen'] : '';
    $realizada = isset($_POST['realizada'])== true ? TRUE : FALSE;
    

    // CHEQUEAR QUE SE SUBIÓ BIEN EL imagen Y EL FORMATO
    if ($imagen && $imagen['error'] == 0) {
        $formatoLogo = strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));
        $formato = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
        if (!in_array($formatoLogo, $formato)) {
            die("Tipo de archivo no permitido.");
        }
        // Obtener el contenido del archivo imagen
        $contenido_imagen = file_get_contents($imagen["tmp_name"]);
    } else {
        $contenido_imagen = NULL;
    }

    try {
        $insert = $conexion->prepare("INSERT INTO tareas (titulo, descripcion, fecha, prioridad, imagen, realizada) VALUES (:titulo, :descripcion, :fecha, :prioridad, :imagen, :realizada");

        $insert->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $insert->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $insert->bindParam(':fecha', $fecha, PDO::PARAM_STR);
        $insert->bindParam(':prioridad', $prioridad, PDO::PARAM_INT);
        $insert->bindParam(':imagen', $contenido_imagen, PDO::PARAM_LOB);
        $insert ->bindParam(':realizada', $realizada, PDO::PARAM_INT);
        $resultado = $insert->execute();
        if (!($prioridad>=1 && $prioridad<=3)) {
            die ("introduce los parámetros correctos");
        } 
        
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $conexion = null;
        header("Location:../vista/lista.php");
    }
?>
