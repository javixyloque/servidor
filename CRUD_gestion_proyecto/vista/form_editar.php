<?php
    require_once('../conexion/conexion.php');
    $conexion = conexion();

    $id = isset($_GET['id'])? intval(filtrado($_GET['id'])): '';
    // $titulo = isset($_POST['titulo'])? filtrado($_POST['titulo']): '';
    // $descripcion = isset($_POST['descripcion'])? filtrado($_POST['descripcion']): '';
    // $periodo = isset($_POST['periodo'])? filtrado($_POST['periodo']): '';
    // $curso = isset($_POST['curso'])? filtrado($_POST['curso']): '';
    // $fecha = isset($_POST['fecha'])? filtrado($_POST['fecha']): '';
    // $nota = isset($_POST['nota'])? filtrado($_POST['nota']): '';
    // $logotipo = isset($_FILES['logotipo']) ? $_FILES['logotipo'] : '';
    // $pdf = isset($_FILES['pdf_proyecto']['name'])? $_FILES['pdf_proyecto']['name']: '';
    // INICIALIZAR VARIABLES PARA EVITAR ERRORES
    $titulo = $descripcion = $periodo = $curso = $fecha = $nota = $logotipo = '';

    if(!empty($id)) {
        try {
            $sql = "SELECT * FROM proyecto WHERE id_proyecto = :id";
    
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> bindParam(':id', $id, PDO::PARAM_INT);
            $sentencia -> execute();
            $select = $sentencia -> fetch(PDO::FETCH_ASSOC);
    
            if ($select) {
                $titulo = $select['titulo'];
                $descripcion = $select['descripcion'];
                $periodo = $select['periodo'];
                $curso = $select['curso'];
                $fecha = $select['fecha_presentacion'];
                $nota = $select['nota'];
                $logotipo = $select['logotipo'];
            } 
            
            
    
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            }
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
    <h2>FORMULARIO DE MODIFICACIÓN DEL TRABAJO <?=  filtrado($titulo) ?></h2>
    <form action="../controlador/editar.php" method="post" enctype="multipart/form-data">
        
            <label for="titulo">Titulo: </label>
                <input type="text" name="titulo" value="<?= filtrado($titulo) ?>">
            
        
        
            <label for="descripcion">Descripción: </label>
                <input type="text" name="descripcion" value="<?= filtrado($descripcion) ?>">
            
            
        
        
            <label for="periodo">Periodo: </label>
                <input type="text" name="periodo" value="<?= filtrado($periodo) ?>">
            
            
        
        
            <label for="curso">Curso: </label>
                <input type="number" value="<?= intval(filtrado($curso)) ?>">
            
            
        
        
            <label for="fecha">Fecha: </label>
                <input type="text" name="fecha" value="<?= filtrado($fecha) ?>">
            
            
        
        
            <label for="nota">Nota: </label>
                <input type="text" name="nota" value="<?= intval(filtrado($nota)) ?>">
            
            <label for="logotipo">Logo actual:</label>
                <img src="data:image/jpeg;base64,<?= base64_encode($logotipo) ?>" alt="Logotipo actual" style="max-width: 150px; max-height: 150px;">
    
            <label for="logotipo">Nuevo logo: </label>
                <input type="file" name="logotipo" enctype="multipart/form-data">
            

        <button type="submit">Agregar trabajo</button>
    </form>
</body>
</html>