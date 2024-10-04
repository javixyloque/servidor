<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>219 - array fm</title>
</head>
<body>
    <?php
        $arr = [];
        for($i = 0; $arr.length<100; $i++) {
            $sorteo = rand(1, 3);
            if ($sorteo === 1) {
                array_push($arr, $sorteo);
            }
        }
        var_dump($arr)
    ?>
</body>
</html>