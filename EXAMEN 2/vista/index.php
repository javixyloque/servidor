<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css"></link>
    <title>Iniciar sesión
    </title>
</head>
<body>
    <form action="../controlador/iniciar_sesion.php" method="post">
        <label for="nombre" name="username">Nombre de usuario </label>
        <input type="text">
        <label for="pass" name="password">PIN </label>
        <input type="text">
        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>