<?php
    require_once('../conexion/conexionPDO.php');
    $conexion = conexion();

    $id = isset($_POST['id_proyecto'])? filtrado($_POST['id_proyecto']): '';
    $titulo = isset($_POST['titulo'])? filtrado($_POST['titulo']): '';
    $descripcion = isset($_POST['descripcion'])? filtrado($_POST['descripcion']): '';
    $periodo = isset($_POST['periodo'])? filtrado($_POST['periodo']): '';
    $curso = isset($_POST['curso'])? filtrado($_POST['curso']): '';
    $fecha = isset($_POST['fecha'])? filtrado($_POST['fecha']): '';
    $nota = isset($_POST['nota'])? filtrado($_POST['nota']): '';
    $logotipo = isset($_FILES['logotipo']) ? $_FILES['logotipo'] : '';
    $pdf = isset($_FILES['pdf_proyecto']['name'])? $_FILES['pdf_proyecto']['name']: '';
    
    
    try {
        $sql = "SELECT * FROM proyecto WHERE id_proyecto = :id";

        $sentencia = $conexion -> prepare($sql);
        $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
        $sentencia -> execute();

    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Subir proyecto</title>
</head>
<body>
    <form action="../controlador/editar.php" method="post" enctype="multipart/form-data">
        
            <label for="titulo">Titulo: </label>
                <input type="text" name="titulo" value="$">
            
        
        
            <label for="descripcion">Descripción: </label>
                <input type="text" name="descripcion">
            
            
        
        
            <label for="periodo">Periodo: </label>
                <input type="text" name="periodo">
            
            
        
        
            <label for="curso">Curso: </label>
                <input type="number">
            
            
        
        
            <label for="fecha">Fecha: </label>
                <input type="text" name="fecha">
            
            
        
        
            <label for="nota">Nota: </label>
                <input type="text" name="nota">
            
            
            <label for="logotipo">Logo: </label>
                <input type="file" name="logotipo" enctype="multipart/form-data">
            

        <button type="submit">Agregar trabajo</button>
    </form>
</body>
</html>