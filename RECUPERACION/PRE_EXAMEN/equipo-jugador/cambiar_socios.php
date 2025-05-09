<?php
require_once './bootstrap.php';


$id = $_GET['id'];
$socios = $_GET['socios'];

$entityManager->getRepository(Equipo::class)->actualizarSocios($id, $socios);

