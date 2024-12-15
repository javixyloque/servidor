<?php
session_start();

// GENERAR HASH DE LA CONTRASEÑA, admin123
$hash = password_hash('admin123', PASSWORD_DEFAULT); 


function mostrarMensaje() {
    echo "<h2>Bienvenido, {$_SESSION['usuario']}!</h2>";
    echo "<a href='?logout=true'>Cerrar sesión</a>";
}

if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    session_destroy(); 
    header('Location: ' . $_SERVER['PHP_SELF']); //RECARGA
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ??'';
    $pass = $_POST['pass'] ?? '';

    // USUARIO admin DE EJEMPLO (CONTRASEÑA YA GENERADA: admin123)
    if ($usuario === 'admin' && password_verify($pass, $hash)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['usuario'] = $usuario;
    } else {
        $error = 'Usuario o contraseña incorrectos.';
    }
}

// SI ESTA INICIADA LA SESION SE MUESTRA EL MENSAJE, SINO, MUESTRA EL FORMULARIO DE LOGIN
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
    mostrarMensaje();
} else {
    $error = $error ?? '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']): ?>
        <h2>Login</h2>
        <?php if (!empty($error)): ?>
            <p style="color: red;"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <form method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required><br><br>

            <label for="pass">Contraseña:</label>
            <input type="pass" id="pass" name="pass" required><br><br>

            <input type="submit" value="Iniciar sesión">
        </form>
    <?php endif; ?>
</body>
</html>


<?php
// PARA GUARDAR LOS USUARIOS COMO ARRAY ASOCIATVIVO Y ASÍ ACCEDER A ELLOS MAS FACILMENTE, (BASE DE DATOS)

$users = [
    'admin' => password_hash('admin123', PASSWORD_DEFAULT),
    'user1' => password_hash('userpassword', PASSWORD_DEFAULT), 
];

// Validar credenciales
if (isset($users[$username]) && password_verify($password, $users[$username])) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
} else {
    $error = 'Usuario o contraseña incorrectos.';
}
?>