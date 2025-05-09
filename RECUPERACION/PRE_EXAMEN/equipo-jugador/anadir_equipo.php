<?php
require_once './bootstrap.php';

$equipo = new Equipo();
$equipo ->setNombre("Real Madrid");
$equipo ->setCiudad("Madrid");
$equipo ->setSocios(1000000);
$equipo->setFundacion(1902);

$entityManager->persist($equipo);
$entityManager->flush();

