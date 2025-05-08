<?php
    require_once'../biblioteca/biblioteca.php';
    $conexion = conexion();

    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        $id = isset($_GET['id']) ? intval(filtrado($_GET['id'])) : '';
        
    }
    try {
        $sql = "UPDATE tutor SET baja=1 WHERE id_tutor = :id";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        header('Location:../vista/centro_admin.php');
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    }
    
?>