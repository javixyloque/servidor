<?php
require_once'./controlador.php';
session_start();
$usuario = $password = '';
$cntrsn = password_hash('007', PASSWORD_DEFAULT); 
$usuario = "james_bon";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = filtrado($_POST['usuario']) ?? '';
    $password = filtrado($_POST['password']) ?? '';

    echo $user."<br>".$password;
}


if ($user == $usuario || password_verify($password, $cntrsn)) {

    $_SESSION['bool'] = true;
    $_SESSION['user'] = $user;
    header("Location:../vista/index.php");
    exit();
} else {
    
    $_SESSION['bool'] = false;
    header("Location:../vista/index.php");
    exit();
}






?>