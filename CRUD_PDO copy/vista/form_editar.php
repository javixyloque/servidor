<?php
    require_once('../conexion/conexion.php');
    require_once('../biblioteca.php');
    $conexion = conexion();

    $id = isset($_GET['id'])? intval(filtrado($_GET['id'])): '';
    
    // $prenda = isset($_POST['prenda'])? filtrado($_POST['prenda']): '';
    // $descripcion = isset($_POST['descripcion'])? filtrado($_POST['descripcion']): '';
    // $periodo = isset($_POST['periodo'])? filtrado($_POST['periodo']): '';
    // $curso = isset($_POST['curso'])? filtrado($_POST['curso']): '';
    // $fecha = isset($_POST['fecha'])? filtrado($_POST['fecha']): '';
    // $nota = isset($_POST['nota'])? filtrado($_POST['nota']): '';
    // $logotipo = isset($_FILES['logotipo']) ? $_FILES['logotipo'] : '';
    // $pdf = isset($_FILES['pdf_proyecto']['name'])? $_FILES['pdf_proyecto']['name']: '';
    // INICIALIZAR VARIABLES PARA EVITAR ERRORES
    $prenda = $foto = $precio = $rebajada = $rebaja = ''; 

    if(!empty($id)) {
        try {
            $sql = "SELECT * FROM rebajas_javier WHERE id_prenda = :id";
    
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> bindParam(':id', $id, PDO::PARAM_INT);
            $sentencia -> execute();
            $select = $sentencia -> fetch(PDO::FETCH_ASSOC);
    
            if ($select) {
                $prenda = $select['prenda'];
                $foto = $select['foto'];
                $precio = $select['precio'];
                $rebajada = $select['rebajada'];
                $rebaja = $select['rebaja'];
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
    <form action="../controlador/editar.php?id=<?=$id ?>" method="post" enctype="multipart/form-data">
        
            <label for="prenda">Prenda:   </label>
            <p><?= $prenda ?></p>

                <label for="foto">Foto: </label><img src="" alt="">
        
        
            <label for="precio">Precio: </label>
            <p><?= $precio ?></p>
            
            
        
        
            <label for="rebajada">Rebajada: 
                
            </label>
            <select name="rebajada" id="rebajada">
                <option value="true">SÍ</option>
                <option value="false">NO</option>
            </select>
                
            
            
        
        
            <label for="rebaja">Rebaja: </label>
                <input type="number" value='<?= $rebaja ?>'>
            

            
            

        <button type="submit">Actualizar producto</button>
    </form>
</body>
</html>