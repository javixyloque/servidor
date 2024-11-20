<?php
    require_once '../conexion/conexion.php';
    $conexion = conexion();
    $titulo = isset($_POST['titulo'])? filtrado($_POST['titulo']): '';
    $descripcion = isset($_POST['descripcion'])? filtrado($_POST['descripcion']): '';
    $periodo = isset($_POST['periodo'])? filtrado($_POST['periodo']): '';
    $curso = isset($_POST['curso'])? filtrado($_POST['curso']): '';
    $fecha = isset($_POST['fecha'])? filtrado($_POST['fecha']): '';
    $nota = isset($_POST['nota'])? filtrado($_POST['nota']): '';
    $logotipo = isset($_FILES['logotipo']['name'])? $_FILES['logotipo']['name']: '';
    $pdf = isset($_FILES['pdf_proyecto']['name'])? $_FILES['pdf_proyecto']['name']: '';

    if ($logotipo) {
        $ext = strtolower(pathinfo($logotipo, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($ext, $allowed)) {
            die("Tipo de archivo no permitido.");
        }
        $logotipo = uniqid() . '.' . $ext;
        $mover = move_uploaded_file($_FILES["logotipo"]["tmp_name"], "../subidos/" . $logotipo);
        if (!$mover) {
            die("Error al subir el archivo.");
        }
        
    }
    try {
        $insert = $conexion->prepare("INSERT INTO proyecto (titulo, descripcion, periodo, curso, fecha_presentacion, nota, logotipo) VALUES (:titulo, :descripcion, :periodo, :curso, :fecha, :nota, :logotipo)");
        
        $insert->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $insert->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $insert->bindParam(':periodo', $periodo,PDO::PARAM_STR);
        $insert->bindParam(':curso', $curso, PDO::PARAM_INT);
        $insert->bindParam(':fecha', $fecha, PDO::PARAM_STR);
        $insert->bindParam(':nota', $nota, PDO::PARAM_STR);
        $insert->bindParam(':logotipo', $logotipo, PDO::PARAM_LOB);
        $resultado = $insert -> execute();
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    } finally {
        $conexion = null;
        header("Location:../vista/index.php");
    }

?>