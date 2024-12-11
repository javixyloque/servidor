<?php
        require_once'./borrar_cookie.php'; 
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
        
        $color = $_POST['color'];

        // AÑADIR LA COOKIE CON EL COLOR SELECCIONADO (2 DIAS)
        setcookie('color', $color, time() + (2 * 3600 * 24)); 
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
        
        body {
            display: flex;
            flex-direction: column;
            background-color: <?= isset($_COOKIE['color']) ? $_COOKIE['color'] : 'white'?>;
            transition: background-color 2s ease-in;
            align-items: center;
            font-family: sans-serif;
            
        }
        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
        }
        label {
            color: <?= $_COOKIE['color'] == 'aquamarine' ? '#1B1833' : 'aquamarine'?>;
        }
        input {
            margin: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            font-family: sans-serif;
            color: <?= $_COOKIE['color'] == 'aquamarine' ? 'aquamarine' : '#1B1833'?>;
            background-color: <?= $_COOKIE['color'] == 'aquamarine' ? '#1B1833' : 'aquamarine'?>;
            transition: all 0.5s ease-in; /* No funciona*/ 
        }
        
        
    </style>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <div><label for="color">Elige un color de fondo:</label>
        <select name="color" id="color">
            <option value="aquamarine">Claro</option>
            <option value="#1B1833">Oscuro</option>
        </select>
        </div>
        <input type="submit" value="Aceptar">
    </form>

    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <input type="submit" value="ELIMINAR COOKIE" name="borrar">
    </form>

</body>
</html>