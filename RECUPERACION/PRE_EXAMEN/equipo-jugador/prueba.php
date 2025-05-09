<?php
require_once './bootstrap.php';

$equipos = $entityManager->getRepository(Equipo::class)->findConMasDeXSocios(500000);

if (count($equipos) == 0) {
    echo "No hay equipos con mas de esos socios";
}

foreach ($equipos as $e) {
    echo $e->getNombre() . "<br>";
}
// $jugadores = $entityManager->getRepository(Jugador::class)->findAll();
// foreach ($jugadores as $j) {
//     echo $j->getNombre() . "<br>";
// }

