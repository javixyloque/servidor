<?php
    require_once('../conexion/conexion.php');
    require_once('../biblioteca.php');
    $conexion = conexion();
    
    $id = isset($_GET['id'])? intval(filtrado($_GET['id'])) : null;
    $prenda = isset($_POST['prenda'])? filtrado($_POST['prenda']): '';
    $foto = isset($_FILES['foto']) ? $_FILES['foto'] : '';
    $precio = isset($_POST['precio']) ? filtrado($_POST['precio']): '';
    $rebajada = $_POST['rebajada'] == 1 ? TRUE : FALSE;
    $rebaja = isset($_POST['rebaja'])? filtrado($_POST['rebaja']): '';
    
   
    // $pdf = isset($_FILES['pdf_proyecto']['name'])? $_FILES['pdf_proyecto']['name']: '';

    $sql =  "UPDATE rebajas_javier SET rebajada = :rebajada, rebaja = :rebaja WHERE id_prenda = :id";
    
    try {
        $update = $conexion -> prepare($sql);
        $update ->bindParam(':id', $id, PDO::PARAM_INT);
        
        $update -> bindParam(':rebajada', $rebajada, PDO::PARAM_BOOL);
        $update -> bindParam(':rebaja', $rebaja, PDO::PARAM_INT);
        // $update -> bindParam(':foto', $foto['name'], PDO::PARAM_LOB);

        $resultado  = $update -> execute();
        if ($resultado) {
            header('Location: ../vista/index.php');
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

