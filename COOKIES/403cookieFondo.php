<?php
    require_once'./borrar_cookie.php'; 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
    
    $color = $_POST['color'];

    
    setcookie('color', $color, time() + (3600 * 24)); 
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
} else if( isset($_POST['borrar'])) {
    borrar('color');
    
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
    
}

    $color = isset($_COOKIE['color']) ? $_COOKIE['color'] : 'white'; 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Álvarez Centeno">
    <title>403 - COOKIE FONDO</title>
    <style>
        html {
            background-color: <?= isset($_COOKIE['color']) ? $_COOKIE['color'] : 'white'?>;
        }
        
    </style>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="color">Elige un color de fondo:</label>
        <select name="color" id="color">
            <option value="green">Verde</option>
            <option value="purple">Morado</option>
        </select>
        <input type="submit" value="Aceptar">
    </form>

    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <input type="submit" value="ELIMINAR COOKIE" name="borrar">
    </form>

</body>
</html>