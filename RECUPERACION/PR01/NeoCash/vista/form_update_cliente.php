<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../controlador/controlador.php';

if (!isset($_SESSION['user'])) {
    header('Location: ../vista');
    exit;
}

$id = filtrado($_GET['id']) ?? null;

if ($id) {
    $cliente = selectClientePorId($id);
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR CLIENTE</title>
</head>
<body>
    <form action="../scripts/update_cliente.php?id=<?=$cliente[0]['id']?>" method="post" enctype="multipart/form-data">
    <label for="nombre">NOMBRE DE USUARIO</label>
    <input type="hidden" name="id" value=<?= $cliente[0]['id']?>>
        <input type="text" id="nombre" name="nombre" value="<?=$cliente[0]['nombre']?>" required><br><br>
        <label for="email">CORREO ELECTRONICO</label>
        <input type="email" id="email" name="email" value="<?=$cliente[0]['email']?>" required><br><br>
        <label for="img_antigua">IMAGEN ANTIGUA</label>
        <img  height="100" width="100" src="data:image/jpeg;base64,<?= base64_encode($cliente[0]['img_cliente']) ?>" />
        <input type="hidden" name="img_antigua" value="<?=base64_encode($cliente[0]['img_cliente'])?>">
        <label for="img_nueva">IMAGEN NUEVA</label>
        <input type="file" id="img_nueva" name="img_nueva" enctype="multipart/form-data"><br><br>


        <label for="confirmar_password">NUEVA CONTRASEÑA (opcional)</label>
        <input type="password" name="password" placeholder="******" ><br><br>


        <button type="submit" id="registrar">ACTUALIZAR DATOS</button>
    </form>
</body>
</html>