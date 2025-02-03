<?php

require_once "bootstrap.php";
require_once './src/Entity/EquipoBidireccional.php';
require_once './src/Entity/JugadorBidireccional.php';
require_once './src/Entity/Partido.php';
require_once './src/Entity/PartidoRepository.php';
// ID del equipo a buscar
$equipoId = 1; // Asegúrate de cambiar esto por un ID existente en tu base de datos

// 1️⃣ Buscar partidos donde el equipo jugó como visitante
$partidosVisitante = $partidoRepo->findPartidosComoVisitante($equipoId);
echo "🔹 Partidos como visitante:\n";
foreach ($partidosVisitante as $partido) {
    echo " - Partido ID: " . $partido->getId() . "\n";
}

// 2️⃣ Contar victorias del equipo como local
$victorias = $partidoRepo->countVictoriasLocal($equipoId);
echo "🔹 Victorias como local: $victorias\n";

// 3️⃣ Buscar todos los partidos en los que participó
$partidosEquipo = $partidoRepo->findPartidosDeEquipo($equipoId);
echo "🔹 Todos los partidos en los que participó:\n";
foreach ($partidosEquipo as $partido) {
    echo " - Partido ID: " . $partido->getId() . "\n";
}
