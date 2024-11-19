<?php
    require_once('./conexionPDO.php');
    $conexion = conexion();
    $id = isset($_POST['id'])? $_POST['id'] : '';
    $sql = 'SELECT * FROM PERSONA WHERE id_persona = :id';

    try {
        $select = $conexion -> prepare($sql);
        $select -> bindParam(':id', $id, PDO::PARAM_INT);
        $select -> execute();
        $resultado = $select -> fetchAll(PDO::FETCH_ASSOC);

        if ($resultado) {
            echo "ID: ". $resultado['id_persona']. "<br>";
            echo "Nombre: ". $resultado['nombre']. "<br>";
            echo "Apellido: ". $resultado['apellido']. "<br>";
        }

    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    } finally {
        
        $conexion = null;
    }
    
?>