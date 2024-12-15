<?php
    require_once('../conexion/conexion.php');
    $conexion = conexion();

    $id = isset($_GET['id_prenda'])? intval(filtrado($_GET['id_prenda'])): '';
    // $prenda = isset($_POST['prenda'])? filtrado($_POST['prenda']): '';
    // $descripcion = isset($_POST['descripcion'])? filtrado($_POST['descripcion']): '';
    // $periodo = isset($_POST['periodo'])? filtrado($_POST['periodo']): '';
    // $curso = isset($_POST['curso'])? filtrado($_POST['curso']): '';
    // $fecha = isset($_POST['fecha'])? filtrado($_POST['fecha']): '';
    // $nota = isset($_POST['nota'])? filtrado($_POST['nota']): '';
    // $logotipo = isset($_FILES['logotipo']) ? $_FILES['logotipo'] : '';
    // $pdf = isset($_FILES['pdf_proyecto']['name'])? $_FILES['pdf_proyecto']['name']: '';
    // INICIALIZAR VARIABLES PARA EVITAR ERRORES

    if(!empty($id)) {
        try {
            $sql = "SELECT * FROM rebajas_javier WHERE id_prenda = :id";
    
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> bindParam(':id', $id, PDO::PARAM_INT);
            $sentencia -> execute();
            $select = $sentencia -> fetch(PDO::FETCH_ASSOC);
    
            if ($select) {
                $prenda = $select['prenda'];
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
    <form action="../controlador/subir.php" method="post" enctype="multipart/form-data">
        
            <label for="prenda">Prenda: </label>
                <input type="prenda" name="prenda">

                <label for="foto">Foto: </label>
                <input type="file" name="foto" enctype="multipart/form-data">
        
        
            <label for="precio">Precio: </label>
                <input type="number" name="precio">
            
            
        
        
            <label for="rebajada">Rebajada: 
                
            </label>
            <select name="rebajada" id="rebajada">
                <option value="true">SÍ</option>
                <option value="false">NO</option>
            </select>
                
            
            
        
        
            <label for="rebaja">Rebaja: </label>
                <input type="number">
            

            
            

        <button type="submit">Actualizar producto</button>
    </form>
</body>
</html>