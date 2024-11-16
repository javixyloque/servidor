<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 0;
        $resultado = 1;
        if ($num === 0) {
            $num  = 1;
        } else if ($num <0) {
            echo "No existe";
            return;
        }
        for ($i = 1; $i<=$num; $i++) {
            $resultado*=$i;
        }
        echo $resultado;
    ?>
</body>
</html>

