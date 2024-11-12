<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $b = 2;
        $a = "2";
        if ($b == $a) {
            echo"Son iguales";
            if ($b===$a) {
                echo "Son identicos";
            } else  {
                echo "Pero no identicos";
            }

        } else {
            echo "No son iguales";
        }
    ?>
</body>
</html>