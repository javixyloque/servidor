<?php
require_once "bootstrap.php";
require_once './src/Entity/EquipoBidireccional.php';
require_once './src/Entity/JugadorBidireccional.php';
$id = intval($_GET['id']);
//buscar el jugador con el id indicado/
$equipo = $entityManager->find("EquipoBidireccional", $id);
if(!$equipo)
{
    echo "Equipo no encontrado";
}else{
    echo "Nombre del equipo: ". $equipo->getNombre()."<br>";
    $jugadores = $equipo->getJugadores();
    echo "Lista de jugadores"."<br>";
    foreach($jugadores as $jugador){
        echo "Nombre: ". $jugador->getNombre()."<br>";
    }
}