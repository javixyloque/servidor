<?php
    require_once('./conexionPDO.php');
    $conexion = conexion();
    
    $id = isset($_POST['id_proyecto'])? intval(filtrado($_POST['id_proyecto'])) : null;
    $titulo = isset($_POST['titulo'])? filtrado($_POST['titulo']): '';
    $descripcion = isset($_POST['descripcion'])? filtrado($_POST['descripcion']): '';
    $periodo = isset($_POST['periodo'])? filtrado($_POST['periodo']): '';
    $curso = isset($_POST['curso'])? filtrado($_POST['curso']): '';
    $fecha = isset($_POST['fecha'])? filtrado($_POST['fecha']): '';
    $nota = isset($_POST['nota'])? filtrado($_POST['nota']): '';
    $logotipo = isset($_FILES['logotipo']) ? $_FILES['logotipo'] : '';
    // $pdf = isset($_FILES['pdf_proyecto']['name'])? $_FILES['pdf_proyecto']['name']: '';

    $sql =  "UPDATE proyecto SET titulo = :titulo, descripcion = :descripcion, periodo = :periodo, curso = :curso, fecha = :fecha, nota = :nota, logotipo = :logotipo WHERE id_proyecto = :id";
    
    try {
        $update = $conexion -> prepare($sql);
        $update ->bindParam(':id', $id, PDO::PARAM_INT);
        $update -> bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $update -> bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $update -> bindParam(':periodo', $periodo, PDO::PARAM_STR);
        $update -> bindParam(':curso', $curso, PDO::PARAM_STR);
        $update -> bindParam(':fecha', $fecha, PDO::PARAM_STR);
        $update -> bindParam(':nota', $nota, PDO::PARAM_STR);
        $update -> bindParam(':logotipo', $logotipo['name'], PDO::PARAM_STR);

        $resultado  = $update -> execute();
        if ($resultado) {
            echo 'Persona modificada correctamente';
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

