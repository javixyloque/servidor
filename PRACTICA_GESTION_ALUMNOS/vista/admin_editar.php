<?php
    require_once('../biblioteca/biblioteca.php');
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
                // $logotipo = $select['logotipo'];
                $alumno = $select['alumno'];
                $tutor = $select['tutor'];
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
  
    <form action="../controlador/editar_proyecto.php" method="post" enctype="multipart/form-data">
    <h2>FORMULARIO DE MODIFICACIÓN DEL TRABAJO <?=  filtrado($titulo) ?></h2>
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
            
        

        <button type="submit">Guardar cambios</button>
    </form>
</body>
</html>
</html>