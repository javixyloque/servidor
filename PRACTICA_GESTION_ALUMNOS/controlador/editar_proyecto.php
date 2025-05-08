<?php
    require_once('../biblioteca/biblioteca.php');
    $conexion = conexion();
    session_start();
    
    $id = isset($_POST['id_proyecto'])? intval(filtrado($_POST['id_proyecto'])) : null;
    $titulo = isset($_POST['titulo'])? filtrado($_POST['titulo']): '';
    $descripcion = isset($_POST['descripcion'])? filtrado($_POST['descripcion']): '';
    $periodo = isset($_POST['periodo'])? filtrado($_POST['periodo']): '';
    $curso = isset($_POST['curso'])? filtrado($_POST['curso']): '';
    $fecha_presentacion = isset($_POST['fecha_presentacion'])? filtrado($_POST['fecha_presentacion']): '';
    $nota = isset($_POST['nota'])? filtrado($_POST['nota']): '';
    $foto = isset($_FILES['foto']) ? $_FILES['foto'] : '';
    // $pdf = isset($_FILES['pdf_proyecto']['name'])? $_FILES['pdf_proyecto']['name']: '';

    $sql =  "UPDATE proyecto SET titulo = :titulo, descripcion = :descripcion, periodo = :periodo, curso = :curso, fecha_presentacion = :fecha_presentacion, nota = :nota WHERE id_proyecto = :id";
    
    try {
        $update = $conexion -> prepare($sql);
        $update ->bindParam(':id', $id, PDO::PARAM_INT);
        $update -> bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $update -> bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $update -> bindParam(':periodo', $periodo, PDO::PARAM_STR);
        $update -> bindParam(':curso', $curso, PDO::PARAM_STR);
        $update -> bindParam(':fecha_presentacion', $fecha_presentacion, PDO::PARAM_STR);
        $update -> bindParam(':nota', $nota, PDO::PARAM_STR);
        // $update -> bindParam(':foto', $foto['name'], PDO::PARAM_STR);

        $resultado  = $update -> execute();
        if ($resultado) {
            if ($_SESSION['tipo_usu']==1) {
                header("Location: ../vista/centro_admin.php");
            } else if ($_SESSION['tipo_usu']==2) {
                header("Location: ../vista/centro_tutor.php");
            }
        } else {
            echo 'Error al modificar la persona';
        }
    } catch (PDOException $e) {

        echo "Error: ". $e->getMessage();
    } finally {
        // $resultado -> free();
        $conexion = null;
        
    }

?>

