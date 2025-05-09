
<?php
require_once './bootstrap.php';
use Jugador;


try {
    $id = $_GET['id'];
    $jugador = $entityManager->getRepository(Jugador::class)->find($id);
    echo $jugador->getEquipo()->getNombre();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}


?>