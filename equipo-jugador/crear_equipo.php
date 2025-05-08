<?php
require_once "bootstrap.php";
require_once './src/Entity/Equipo.php';



$nuevo = new Equipo();
$nombre = filtrado($_POST['nombre']) ?? '';
$socios = intval(filtrado($_POST['socios'])) ?? NULL;
$fundacion = intval(filtrado($_POST['fundacion'])) ?? NULL;
$ciudad = filtrado($_POST['ciudad']) ?? NULL;
$nuevo->setNombre($nombre);

if ($fundacion) {
    $nuevo->setFundacion($fundacion);
}
if ($socios) {
    $nuevo->setSocios($socios);
}
if ($ciudad) {
    $nuevo->setCiudad($ciudad);
}

//EL PERSIST ES PARA QUE SE GUARDEN LOS CAMBIOS
$entityManager->persist($nuevo);
// EL FLUSH ES COMO UN COMMIT
$entityManager->flush();
echo "Equipo insertado " . $nuevo->getNombre() . "\n";
