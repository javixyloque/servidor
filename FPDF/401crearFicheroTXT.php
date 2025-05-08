<?php
    require_once '../PDO/conexionPDO.php';
    $conexion = conexion();

    $sql = "SELECT * FROM alumnos";
    try{
        $select = $conexion -> prepare($sql);
        $select ->setFetchMode(PDO::FETCH_ASSOC);
        $select->execute();
        $registros ="";
        while ($fila = $select->fetch()) {
        
            $registros .= "Alumno nº". $fila['id_alumno'].": ".$fila['nombre']." ".$fila['apellido1']."<br>" ;
        }
        $res=file_put_contents("alumnos.txt", $registros);
    } catch(PDOException $e){
        echo "Error: ". $e->getMessage();
    } finally {
        if ($res) {
            echo "Fichero creado con éxito";
        } else {
            echo "Error al crear el fichero";
        }
    
        $contenido = file_get_contents("alumnos.txt");
        echo "ALUMNOS DEL CENTRO:"."<br>".$contenido;
        $conexion = null;
    }
    
?>