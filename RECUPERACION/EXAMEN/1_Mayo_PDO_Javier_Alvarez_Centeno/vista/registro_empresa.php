<?php

// JAVIER ALVAREZ CENTENO
session_start();
require_once'../controlador/controlador.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar empresa</title>
</head>
<body>
<form action="../scripts/registrarse.php" method="post" enctype="multipart/form-data">
        <label for="nombre">NOMBRE DE LA EMPRESA</label>
        <input type="text" id="nombre" name="nombre" placeholder="lolobenitez43" required><br><br>
        <label for="responsable">NOMBRE RESPONSABLE</label>
        <input type="text" id="responsable" name="responsable" placeholder="lolobenitez43" required><br><br>
        <label for="email">CORREO ELECTRONICO</label>
        <input type="email" id="email" name="email" placeholder="lolobenitez43@gmail.com" required><br><br>
        <label for="imagen">IMAGEN DE USUARIO</label>
        <input type="file" id="imagen" name="imagen" enctype="multipart/form-data"><br><br>



        <label for="password">CONTRASEÑA</label>
        <input type="password" name="password" placeholder="******" required><br><br>

        <button type="submit">Registrar</button>
        </form>

        <?php if (isset($_SESSION['empresa'])) {?>
        <a href="../scritps/cerrar_sesion.php">Cerrar sesion</a>

        <?php }?>
</body>
</html>