<?php
    include("conexion.php");
    // CONEXION A UNA BASE DE DATOS
    $conexion = conectar();
    

    $consulta = "select * from persona";
    $resultado = $conexion -> query ($consulta);
    $numRegistros = $resultado -> num_rows;
    $lista = $resultado -> fetch_assoc();
    echo "Numero de registros: ". $numRegistros."<br>";
    echo "<table border='solid 2px' cellspacing='0' width='250px' align='center' style='text-align: center;'>";
    if ($numRegistros > 0 ) {
        //SI RECORREMOS LOS RESULTADOS
        echo "<thead> <th>ID</th><th>NOMBRE</th></thead>";
        foreach($lista as $usuario) {
            echo "<tr>";
            echo "<td>".$usuario["id_persona"]."</td>";
            echo "<td>".ucwords($usuario["nombre"])."</td>";
            echo "</tr>";
        }
    } 
    echo "</table>";
    $resultado -> free();
    $conexion -> close();
?>
