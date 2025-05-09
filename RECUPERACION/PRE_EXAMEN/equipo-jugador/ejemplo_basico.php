<?php
require_once'./bootstrap.php';

try {
    $id = $_GET['id'];
    $jugador = $entityManager->find(Jugador::class, intval($id));
    echo $jugador;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}


?>