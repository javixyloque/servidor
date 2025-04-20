<?php
session_start();
require_once'../controlador/controlador.php';

//  CHECK   =>  INICIO SESIÓN
if (!isset($_SESSION['user'])) {
    header('Location:../vista');
} 



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AÑADIR TRANSACCIÓN</title>
</head>
<body>
    <h1>Que deseas hacer,<em> <?= $_SESSION['user'] ?></em>?</h1>
    <h4>NUEVA TRANSACCIÓN</h4>
    <form action="../scripts/insertTransaccion.php" method="post">
        <label for="concepto">CONCEPTO</label>
        <input type="text" id="concepto" name="concepto" required><br><br>

        <label for="cantidad">CANTIDAD</label>
        <input type="number" id="cantidad" name="cantidad" required><br><br>

        <label for="tipo">TIPO</label>
        <select id="tipo" name="tipo" required>
            <option value="ingreso">Ingreso</option>
            <option value="retirada">Retirada</option>
        </select><br><br>

        <label for="fecha">FECHA</label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <button type="submit">AÑADIR TRANSACCIÓN</button>
    </form>
    </form>
</body>
</html>