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
            <h1 id="trigger_iniciar">INICIAR SESIÓN</h1>
            <h1 id="trigger_registrar">REGISTRARSE</h1>
        </section>
        <form id="iniciar_sesion" action="../controlador/iniciar_sesion.php">
            <label for="usuario">NOMBRE DE USUARIO</label>
            <input type="text" id="usuario" name="usuario" placeholder="lolobenitez43" required>
        </form>
        <form id="registrarse" action="../controlador/registrarse.php"></form>
    </div>
</body>
</html>