<?php
// ejemplo_basicos.php
require_once"bootstrap.php";
require_once'./src/Entity/Equipo.php';
// buscar por clave primaria
$codigoEq = filtrado($_GET['id_equipo']);

$eq = $entityManager->find("Equipo", $codigoEq);
// mostrar datos
if ($eq) {
    //COMMIT
    // $entityManager->flush();
    echo "Equipo: ".$eq->getNombre()."<br>";
    echo "Nº socios: ".$eq->getSocios()."<br>";
    echo "Fundación: ".$eq->getFundacion()."<br>";
    echo "Ciudad: ".$eq->getCiudad()."<br>";
}

// cambiar el número de socios
// GUARDAR CAMBIOS EN BASE DE DATOS


// CAMBIAR


// si el equipo no existe devuelve null
$eq = $entityManager->find("Equipo", $codigoEq);
if(!$eq){
	echo "Equipo no encontrado";
}