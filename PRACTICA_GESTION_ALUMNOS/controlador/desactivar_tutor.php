<?php
    require_once'../biblioteca/biblioteca.php';
    $conexion = conexion();
    $sql = "UPDATE tutor SET activar = 'inactivo' WHERE id_tutor = :id";

    if ($_SERVER['REQUEST_METHOD']=='GET') {
        $id = filtrado($_GET['id'])?? '';
    }

    try {
        $update = $conexion->prepare($sql);
        $update->bindParam(':id', $id, PDO::PARAM_INT);
        $update->execute();
        header('Location:../vista/centro_admin.php');
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    }


?>