<?php
// ejemplo_basicos.php
require_once "bootstrap.php";
require_once './src/Entity/Equipo.php';
// buscar por clave primaria
$eq = $entityManager->find("Equipo", 2);
// mostrar datos
echo $eq->getSocios();
// cambiar el número de socios
$eq->setSocios(70000);
// GUARDAR CAMBIOS EN BASE DE DATOS
$entityManager->flush();
// si el equipo no existe devuelve null
$eq = $entityManager->find("Equipo", 2);
if(!$eq){
	echo "Equipo no encontrado";
}
var_dump($eq);