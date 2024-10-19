<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>237 - Filtrado</title>
</head>
<body>
    <form action="237filtrado.php" method="get">
        <label for="text">Introduzca los numeros que quiere visualizar como una cadena</label>
        <input type="text" name="str">
        <input type="submit" value="Separar">
    </form>
    <?php
        $nums = $_GET['str'];

        // $nums = "1 2 3 6 7 8 9 15 632 6 5 4 1 0";
        $arrNums = explode(" ", $nums);
        foreach ($arrNums as $numero) {
            echo $numero."<br>";
        }
    ?>
</body>
</html>