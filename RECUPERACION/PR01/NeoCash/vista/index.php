<?php
require_once '../controlador/controlador.php';

    session_start();
    if ($_SESSION['user']) {
        echo "<script>
        alert('Bienvenido de nuevo, <strong>" . $_SESSION['user'] . "</strong>!');
        window.location.href = '../vista/transacciones.php';
        </script>";
    }
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Álvarez Centeno">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>LOGINs</title>
</head>
<body>
    <h1>Login Usuario</h1>
    
    <hr>
    
    <form action="../scripts/login.php" method="post">
        <label for="nombre">NOMBRE DE USUARIO</label>
        <input type="text" id="nombre" name="nombre" placeholder="lolobenitez43" required><br><br>

        <label for="password">CONTRASEÑA</label>
        <input type="password" name="password" placeholder="******" required>
        <button type="submit" id="iniciar_sesion">INICIAR SESION</button>
    </form>

    <hr>
    <h2>Si no tienes cuenta, registrate aquí:</h2>

    <form action="../scripts/registrarse.php" method="post">
        <label for="nombre">NOMBRE DE USUARIO</label>
        <input type="text" id="nombre" name="nombre" placeholder="lolobenitez43" required><br><br>
        <label for="email">CORREO ELECTRONICO</label>
        <input type="email" id="email" name="email" placeholder="lolobenitez43@gmail.com" required><br><br>
        <label for="img_cliente">IMAGEN DE USUARIO</label>
        <input type="file" id="img_cliente" name="img_cliente"><br><br>


        <label for="password">CONTRASEÑA</label>
        <input type="password" name="password" placeholder="******" required><br><br>

        <button type="submit" id="registrar">REGISTRARSE</button>
    </form>

</body>
</html>