<?php
// repositorios.php
require_once "bootstrap.php";
require_once './src/Entity/Jugador.php';
require_once './src/Entity/Equipo.php';
require_once './src/Entity/EquipoRepository.php';


/*usar el repositorio*/
$jugadores = $entityManager->getRepository('Equipo')->getLista("Real Madrid");

if ($jugadores === -1) {
	echo "Equipo no encontrado";
} else {
	foreach ($jugadores as $jugador) {
        echo "Nombre: " . $jugador->getNombre() . " " . $jugador->getApellidos() . "<br>";
    }
}
// Este falla
$jugadores = $entityManager->getRepository('Equipo')->getLista("Manchester");
if($jugadores === -1) {
	echo "Equipo no encontrado";
} else {
	foreach($jugadores as $equipo) {
		echo "Nombre: ". $equipo->getNombre(). " ". $equipo->getApellidos(). "<br>";
	}
}	
