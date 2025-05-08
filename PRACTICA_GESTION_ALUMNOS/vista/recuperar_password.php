<?php
    require_once'../biblioteca/biblioteca.php';
    $conexion = conexion();
    session_start();
    $sql = "SELECT * FROM tutor WHERE correo = :correo";


    // COMPROBAR SI HAY SESIÓN ACTIVA 
    if (isset($_SESSION['login'])) {
        echo '<script>alert("Vamos a ver, de qué cuenta vas a recuperar la contraseña si ya has iniciado sesión")
        location.href = "./index.php";
        </script>';
    }
    

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $email = filtrado($_POST['email']) ?? '';
        try {
            $select = $conexion -> prepare($sql);
            $select -> bindParam(':correo', $email, PDO::PARAM_STR);
            $select -> execute();
            $resultado = $select -> fetch();
            $mensaje = "Saludos de parte de la Administración del IES MENDOZA,\r\n
            lamentamos que seas tan inútil de haber olvidado tu contraseña.\r\n
            Ya sabes, a la próxima golpe de remo.\r\n\r\n
            Una guerra es lo que tenías que haber pasado, incauto.\r\n\r\n\r\n
            USUARIO: $resultado[login]\r\n
            CONTRASEÑA: $resultado[contrasena]\r\n\r\n\r\n
            Saludos, Administración del IES MENDOZA\r\n";

        mail($email, 'Mi título', $mensaje);
        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
            die("No funcionó");
        }   
        
    }


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>RECUPERAR CONTRASEÑA</title>
</head>
<body>
    <div id="container">
        <h1>Recuperar contraseña</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" value="RECUPERAR CONTRASEÑA"></input>
        </form>
        
    </div>
</body>
</html>