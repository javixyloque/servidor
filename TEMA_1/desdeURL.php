<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // AL GET LE PASAMOS EL NOMBRE DE LA VARIABLE QUE RECOGERA EL VALOR DE LA URL
        // http://localhost/misPHP/desdeURL.php?num1=5&num2=23423452 para que recoja 5
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        echo "{$num1}, $num2";
    
    ?>
</body>
</html>