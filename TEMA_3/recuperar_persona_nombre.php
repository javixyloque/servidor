<?php
    
    // CONECTAR BASE DE DATOS
    require("./conexion.php");
    $conexion = conectar();

    // CONSULTA
    $nombre = $_GET['nombre'];
    $consultaSelect = $conexion -> prepare("SELECT * FROM PERSONA WHERE nombre=?");
    // RENOMBRAMOS LA ?
    $consultaSelect -> bind_param("s", $nombre);


    if ($consultaSelect -> execute()) {
        $resultado = $consultaSelect -> get_result();
        $lista = $resultado -> fetch_all(MYSQLI_ASSOC);
        $numRegistros = $resultado -> num_rows;
        echo "Numero de registros: ". $numRegistros."<br>";

        if ($numRegistros > 1) {
            echo "<table border='solid 2px' cellspacing='0' width='50%' align='center' style='text-align: center;' >";
            echo "<thead> <th>ID</th><th>NOMBRE</th><th>APELLIDOS</th><th>TELEFONO</th></thead>";
        
            foreach($lista as $usuario) {
                // MOSTRAR LOS DATOS DE CADA REGISTRO
                echo "<tr>";
                echo "<td>".$usuario['id_persona']."</td>";
                echo "<td>".ucwords($usuario["nombre"])."</td>";
                echo "<td>".ucwords($usuario["apellidos"])."</td>";
                echo "<td>".$usuario['telefono']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            if (!$lista) {
                exit("No hay resultados para el id introducido");
            } else {
                echo "Nombre: ". $lista['nombre']. "<br>";
                echo "Edad: ". $lista['apellidos']. "<br>";
                echo "Telefono: ". $lista['telefono']. "<br>";
            }

        }
    } else {
        echo "Error al ejecutar la consulta: ". $conexion->error;
    }
    $resultado -> free();
    $conexion -> close();


?>