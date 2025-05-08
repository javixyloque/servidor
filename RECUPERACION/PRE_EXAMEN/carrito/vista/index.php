<?php
session_start();
require_once '../modelo/Cuenta.php';


if (!isset($_SESSION['cuenta'])) {
    $cuenta = new Cuenta('Javier', false);
    $_SESSION['cuenta'] = serialize($cuenta);
}

$cuentaN = unserialize($_SESSION['cuenta']);
$movs = $cuentaN->getMovimientos();
var_dump($_SESSION['cuenta']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
</head>
<body>
    <h1>Saludos, <?= $cuentaN->getNombre() ?></h1>
    <h2>Saldo: <?= $cuentaN->getSaldo() ?> €</h2>

    <?php foreach ($movs as $movimiento) {?>
    <p><?= $movimiento['tipo'] ?>: <?= $movimiento['cantidad'] ?>€</p>

    <?php }?>
    <a href="../scripts/anadir_movimiento.php?movimiento=suma">Sumar</a>
    <a href="../scripts/anadir_movimiento.php?movimiento=resta">Restar</a>
    <a href="../scripts/vaciar_movimientos.php">Eliminar historial</a>
</body>
</html>
