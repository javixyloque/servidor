<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>239 - Generador</title>
</head>
<body>  
    <form action="239generador.php" method="get">
        <select name="mayMin" id="sel">
            <option value="mayus">Mayuscula</option>
            <option value="minus">Minuscula</option>
        </select>
        <br>
        <input type="submit" value="Generar letra aleatoria">
    </form>
    <?php
        // session_start();
        $opcion = isset($_GET['mayMin'])? $_GET['mayMin'] :'';
        
        function imprimeAleat ($opt):string {
            if ($opt ==='mayus')  {
                return chr(rand(65, 90));
            } else if ($opt === "minus") {
                return chr(rand(97, 122));
            } else {
                return "";
            }
        }
        echo imprimeAleat($opcion);
        

    ?>
</body>
</html>