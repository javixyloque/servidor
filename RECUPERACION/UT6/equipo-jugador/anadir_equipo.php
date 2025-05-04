<?php
require_once'./bootstrap.php';
require_once'./src/Entity/Equipo.php';


$nombre = htmlspecialchars($_POST['nombre']) ?? '';
$socios = intval($_POST['socios']) ?? 0;
$fundacion = intval($_POST['fundacion']) ?? 0;
$ciudad = htmlspecialchars($_POST['ciudad']) ?? '';

$equipo = new Equipo();
$equipo ->setNombre($nombre);
$equipo->setSocios($socios);
$equipo->setFundacion($fundacion);
$equipo-> setCiudad($ciudad);

$entityManager -> persist($equipo);
$entityManager -> flush();

echo "Equipo insertado con éxito";






?>