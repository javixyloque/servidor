<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="borrar_cookie.php" method="post">
        <label for="name" name="nombre">Borrar cookie</label>
        <input type="text" name="nombre">
        <button type="submit">ELIMINAR</button>
    </form>
    <?php

    if (!isset($_COOKIE['visitas'])) {
        setcookie('visitas', '1', time()+ (1*3600*24));
        echo "Bienvenido por primera vez";
    } else { 
        $visitas = (int)$_COOKIE['visitas'];
        $visitas++;
        setcookie('visitas', $visitas, time()+ (1*3600*24));
        echo "Bienvenido, has visitado este sitio $visitas veces";
    }
   

?>
</body>
</html>





