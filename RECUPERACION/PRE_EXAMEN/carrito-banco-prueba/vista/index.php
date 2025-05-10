<?php
session_start();
require_once '../modelo/Cuenta.php';
if (!isset($_SESSION['cuenta'])) {
    $cuenta = new Cuenta('Javier');
    $_SESSION['cuenta'] = serialize($cuenta);
}

$cuenta = unserialize($_SESSION['cuenta']);
$movimientos = $cuenta->getMovimientos();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta Bancaria</title>
</head>
<body>
    <h1>Bienvenido a la cuenta de <em><?= $cuenta->getNombre() ?></em></h1>
    <ul>
        <?php foreach($movimientos as $mov) {?>
            <li><?=$mov['tipo']." - ".$mov['cantidad'] ?></li>
        <?php } ?>
    </ul>
    
    <h2><?=$cuenta->getSaldo()?>&euro;</h2>
    <a href="../scripts/anadir_movimiento.php?mov=suma">SUMAR 10</a>
    <a href="../scripts/anadir_movimiento.php?mov=resta">RESTAR 10</a>
    <a href="../scripts/vaciar_cuenta.php">VACIAR MOVIMIENTOS</a>
</body>
</html>