<?php
    require_once'../biblioteca/biblioteca.php';
    $conexion = conexion();
    session_start();
    $sql = "DELETE FROM alumnos WHERE id_alumno = :id";
    $sqlProy = "UPDATE proyecto SET alumno = null WHERE alumno = :id";

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = filtrado($_GET['id'])?? '';   
    }

    try {
        $update = $conexion ->prepare($sqlProy);
        $update->bindParam(':id', $id, PDO::PARAM_INT);
        $update->execute();
        $delete = $conexion->prepare($sql);
        $delete->bindParam(':id', $id, PDO::PARAM_INT);



        $delete->execute();

        
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    } finally {

        
        if ( isset($_SESSION['tipo_usu']) && ($_SESSION['tipo_usu']) ==1) {
            header('Location:../vista/centro_admin.php');
        } else if (isset($_SESSION['tipo_usu']) && ($_SESSION['tipo_usu'])==2) {
            header('Location:../vista/centro_tutor.php');
        }
        $conexion = null;
        
    }


?>