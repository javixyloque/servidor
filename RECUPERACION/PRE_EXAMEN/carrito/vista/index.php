<?php
session_start();
require_once '../modelo/Cuenta.php';

$cuenta = new Cuenta('Javier');
$_SESSION['cuenta'] = $cuenta;







?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
</head>
<body>
    <h1>Saludos,<?= $_SESSION['cuenta']->getTitular()?></h1>
    <a href="../scripts/anadir_movimiento.php?neg=false">Suma 10</a>
    <a href="../scripts/anadir_movimiento.php?neg=true">Resta 10</a>
    <ul>
        <?php foreach($_SESSION['movimientos'] as $movimiento) {?>
            <li>
                <?php
                    if ($movimiento->getIsNegativo()) {
                        echo '<li style="background: red; color: white"></li>';
                    } else {
                        echo '<li style="background: green; color: white"></li>';
                    }
                ?>
            </li>

        <?php } ?>
    
    </ul>
    <h1>
        <?php
            foreach ($_SESSION['movimientos'] as $movimiento) {
                # code...
            }
        ?>

    </h1>
</body>
</html>
