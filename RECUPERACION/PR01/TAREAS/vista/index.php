<?php
/* USUARIOS DE EJEMPLO: 

        ['usuario' => 'admin',
        'password' => 'admin123',
        'tipo_usu' => 1], 

        ['usuario' => 'usuario_normal',
        'password' => 'usuario123', 
        'tipo_usu' => 2]
*/ 
// CREAR CARPETA VACIA CADA VEZ QUE SE INICIE LA APLICACION

    session_start();
    if (!$_SESSION['user']) {
        unlink(__DIR__."/Javier/hechasJavier.txt");
        rmdir(__DIR__."/Javier");
        
        mkdir(__DIR__."/Javier");

    } elseif ($_SESSION['user'] == 'james_bon') {
        $_SESSION['bool'] = true;
        header('Location:../vista/tareas.php');
        exit();
    }
    require_once'../controlador/controlador.php';
    $bool = $_SESSION['bool'] ?? null;
    
    $mensaje = $bool === false ? "La contraseña y/o el usuario no son correctos, intentelo de nuevo.":  '';

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
    
    
    <?php if ($bool===false): ?>
        <p id="false" style='color: brown; font-weight:bold; margin-bottom: 4vh; display:block'><?=$mensaje?><p>
    <?php endif; ?>
    
    <?php if ($bool===true): ?>
        <p style='color: #E1FFBB; font-weight:bold; margin-bottom: 4vh; display:block'><?= "Tarea realizada con éxito"?><p>
    <?php endif; ?>

    <form action="../controlador/login.php" method="post">
        <label for="usuario">NOMBRE DE USUARIO</label>
        <input type="text" id="usuario" name="usuario" placeholder="lolobenitez43" required>

        <label for="password">CONTRASEÑA</label>
        <input type="password" name="password" placeholder="******" required>
        <button type="submit" id="iniciar_sesion">INICIAR SESION</button>
    </form>
    
</body>
</html>