<?php

require_once "bootstrap.php";
require_once './src/Entity/EquipoBidireccional.php';
require_once './src/Entity/JugadorBidireccional.php';
require_once './src/Entity/Partido.php';
require_once './src/Entity/PartidoRepository.php';

$equipoId = 56; 


$partidosVisitante = $partidoRepo->findPartidosComoVisitante($equipoId);
echo "🔹 Partidos como visitante:\n";
foreach ($partidosVisitante as $partido) {
    echo " - Partido ID: " . $partido->getId() . "\n";
}


$victorias = $partidoRepo->countVictoriasLocal($equipoId);
echo "Victorias como local: $victorias\n";


$partidosEquipo = $partidoRepo->findPartidosDeEquipo($equipoId);
echo "Todos los partidos en los que participó:\n";
foreach ($partidosEquipo as $partido) {
    echo " - Partido ID: " . $partido->getId() . "\n";
}
