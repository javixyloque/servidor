<?php
    require_once('./conexionPDO.php');
    $conexion = conexion();

    $titulo = isset($_POST['titulo'])?filtrado($_POST['titulo']): '';
    $logotipo = isset($_FILES['logotipo'])? filtrado($_FILES['logotipo']['name']): '';

    $sql = "INSERT INTO proyecto (titulo, logotipo) values (:titulo, :logotipo)";
    try {
        $insert = $conexion->prepare($sql);
        $insert -> bindParam(':titulo', $titulo);
        $insert -> bindParam(':logotipo', $logotipo);
        $resultado = $insert -> execute();
        if ($resultado) {
            $ultimoId = $conexion->lastInsertId();
            $logotipoTemp = $_FILES['logotipo']['tmp_name'];
            $logotipoFin = './imagenes/'.$ultimoId.'-'.$logotipo;
            move_uploaded_file($logotipoTemp, $logotipoFin);
        }
    } catch (PDOException $e) {
        error_log("Error en la operacion".$e->getMessage());
    }finally {

        $conexion = null;
    }
    



?>