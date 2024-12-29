<?php
    require_once'../biblioteca/biblioteca.php';
    $conexion = conexion();

    


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>REGISTRARSE / INICIAR SESIÓN</title>
</head>
<body>
    <div id="container">
        <section id="cabecero">
            <h2 class="iniciar_sesion"  data-status="activo">INICIAR SESIÓN</h1>
            <h2 class="registrarse"  data-status="inactivo">REGISTRARSE</h1>
        </section>


        <form id="iniciar_sesion" action="../controlador/iniciar_sesion.php">
        <label for="usuario">NOMBRE DE USUARIO</label>
            <input type="text" id="usuario" name="usuario" placeholder="lolobenitez43">

            <label for="password">CONTRASEÑA</label>
            <input type="text" name="password">
            <input type="submit" value="Iniciar Sesión">
        </form>


        <form id="registrarse" action="../controlador/registrarse.php">
        <label for="usuario">NOMBRE DE USUARIO</label>
            <input type="text" id="usuario" name="usuario" placeholder="lolobenitez43">

            <label for="password">CONTRASEÑA</label>
            <input type="text" name="password">
            <input type="submit" value="Registrarse">
        </form>

        <script src="../controlador/index.js"></script>
    </div>
</body>
</html>