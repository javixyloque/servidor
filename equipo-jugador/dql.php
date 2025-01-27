<?php
    require_once'./bootstrap.php';
    require_once './src/Entity/Equipo.php';
    require_once './src/Entity/Jugador.php';

    $dql = "SELECT j FROM Jugador j";
    
    // DEVUELVEN ARRAYCOLLECTION => RECORREMOS CON FOREACH
    $consulta = $entityManager->createQuery($dql); 
    $arrayCol = $consulta -> getResult();
    
    // SOLO SE TRATA COMO OBJETO AL DEVOLVER EN SÍ EL REGISTRO DE LA TABLA
    echo "TODOS LOS JUGADORES: <br>";
    foreach ($arrayCol as $jugador) {
        echo "Nombre: ".$jugador->getNombre().", Apellidos: ".$jugador->getApellidos()."<br>"."Edad: ".$jugador->getEdad()."<br>Equipo: ".$jugador->getEquipo()->getNombre()."<br><br>";
    }
    echo "<br>";
    
    
    
    $dql2 = "SELECT j FROM Jugador j WHERE j.edad<:edad";
    
    $consulta2 = $entityManager->createQuery($dql2);
    // SETPARAMETER PREVIENE LA INYECCION DE CODIGO EN LOS WHERE
    $consulta2->setParameter('edad', 30);  // Parámetro para la consulta SQL. El valor es asociado con el parámetro ":edad" en la consulta DQL.
    $arrayCol2 = $consulta2 -> getResult();
    echo "<br>Jugadores menores de 30 años: <br><br>";
    
    foreach ($arrayCol2 as $jugador) {
        echo "Nombre: ".$jugador->getNombre()."<br>";
    }
    
    

    $dql3 = "SELECT COUNT(j.idJugador) FROM Jugador j WHERE j.edad<:edad";
    
    $consulta3 = $entityManager->createQuery($dql3);
    // SETPARAMETER PREVIENE LA INYECCION DE CODIGO EN LOS WHERE
    $consulta3 -> setParameter('edad', 30);
    $numJugadores = $consulta3 -> getSingleScalarResult();
    
    echo "<br><br>Número de jugadores menores de 30 años: ".$numJugadores."<br>";
    
    
    
    
    $dql4 = "SELECT j FROM Jugador j ORDER BY j.edad ASC";
    
    $consulta4 = $entityManager->createQuery($dql4);
    $jugadoresOrdenados = $consulta4 -> getResult();
    
    
    
    echo "<br>Jugadores ordenados por edad (ascendente): <br>";
    
    foreach ($jugadoresOrdenados as $jugador) {
        echo "Nombre: ".$jugador->getNombre()." - Edad: ".$jugador->getEdad()."<br>";
    }



    // CONSULTA CON JOIN
    // J.EQUIPO => E  -  E.NOMBRE => EQUIPO     (CONSULTA['equipo']) -> NOMBRE EQUIPO
    $dqlJoin = "SELECT j.nombre as jugador, e.nombre as equipo FROM Jugador j JOIN j.equipo e";

    $consultaJoin = $entityManager->createQuery($dqlJoin);
    $jugadoresConEquipo = $consultaJoin -> getResult();
    
    echo "<br>Jugadores y equipos: <br>";
    
    // NO DEVOLVEMOS FILAS DE UNA TABLA, TRATA EL OBJETO COMO ARRAY
    foreach ($jugadoresConEquipo as $jugador) {
        echo "Jugador: ".$jugador['jugador']." - Equipo: ".$jugador['equipo']."<br>";
    }


    // CONSULTA CON JOIN EQUIPO => REAL MADRID EVITAR INYECCIÓN
    $dqlJoinMadrid = "SELECT j.nombre as jugador, e.nombre as equipo FROM Jugador j JOIN j.equipo e WHERE e.nombre = :equipo";

    $consultaJoin = $entityManager->createQuery($dqlJoinMadrid);
    $consultaJoin -> setParameter('equipo', "Real Madrid");
    $jugadoresConEquipo = $consultaJoin -> getResult();
    
    echo "<br>Jugadores y equipos: <br>";
    
    // NO DEVOLVEMOS FILAS DE UNA TABLA, SINO REGISTROS AISLADOS. SE TRATA EL OBJETO COMO ARRAY
    foreach ($jugadoresConEquipo as $jugador) {
        echo "Jugador: ".$jugador['jugador']." - Equipo: ".$jugador['equipo']."<br>";
    }
    


    // UPDATE
    $dqlUpdate = "UPDATE jugador j SET j.edad =j.edad+1 WHERE j.edad>:edad";
    $update = $entityManager->createQuery($dqlUpdate);
    $update -> setParameter('edad', 20);
    $sumarEdad = $update->execute();
    echo "<br>Edad de todos los jugadores mayores de 20 años aumentada<br>";


    // DELETE
    $dqlDelete = "DELETE jugador j WHERE j.edad > :edad";
    $delete = $entityManager->createQuery($dqlDelete);
    $delete -> setParameter('edad', 25);  
    $eliminarJugadores = $delete->execute();
    
?>