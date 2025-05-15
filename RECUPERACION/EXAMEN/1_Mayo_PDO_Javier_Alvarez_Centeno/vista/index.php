<?php

// JAVIER ALVAREZ CENTENO
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once '../controlador/controlador.php';


$empresas = selectEmpresas();


if (isset($_SESSION['empresa'])) {
    $empresa = selectEmpresa($_SESSION['empresa']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./registro_empresa.php">REGISTRAR EMPRESA</a>
    <?php foreach ($empresas as $empresa) {?>
        
        <h1><?=$empresa['nombre']?></h1>


     <?php }   ?>

     <?php if(!isset($_SESSION['empresa'])) {?>
        <form action="../scripts/login.php" method="post">
            <h3>Entrar</h3>
            <label for="email">Email</label>
            <input type="email" name="email" required><br><br>
            <label for="password">CONTRASEÑA</label>
            <input type="password"  name="password" required><br><br>
            <button type="submit">Login</button>

        </form>


    <?php } ?>


    <?php if (isset($_SESSION['empresa'])) {?>

        <ul>
            <li>Email: <?= $empresa['email'] ?></li>
            <li>Nombre: <?= $empresa['nombre']?></li>
            <li>Representante: <?=$empresa['responsable']?></li>
            <li>imagen: <img  height="100" width="100" src="data:image/jpeg;base64,<?= base64_encode($empresa['imagen']) ?>" /></li>
        </ul>

        <a href="./ofertas_empresa.php?id=<?=$empresa['id']?>">Ver ofertas de la empresa</a>
        <a href="../scripts/cerrar_sesion.php">Cerrar sesion</a>

        <?php }?>
</body>
</html>