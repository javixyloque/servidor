<?php

// JAVIER ALVAREZ CENTENO
if (isset($_SESSION['empresa'])) {
    header('Location: ../vista');
}

session_start();
require_once'../controlador/controlador.php';

$email = strtolower(filtrado($_POST['email'])) ?? '';
$password = filtrado($_POST['password']) ?? '';



if (comprobarLogin($email, $password)) {

    $_SESSION['empresa'] = $email;
    
    
    echo "<script>alert('Bienvenido de nuevo!');
        window.location.href = '../vista/index.php';
    </script>";
} else {
    echo "<script>alert('Nombre de usuario o contraseña incorrectos');
        window.location.href = '../vista/index.php';
    </script>";
}
?>


