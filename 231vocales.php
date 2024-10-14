<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>231 - Vocales</title>
</head>
<body>
    <?php
        $strIni = "Juan Luis Guerra revive y el mundo tiene salvacion";
        $cadena = strtolower($strIni);

        $vocales = [
            "a" => 0,
            "e" => 0,
            "i" => 0,
            "o" => 0,
            "u" => 0
        ];

        $a = substr_count($cadena, "a");
        $e = substr_count($cadena, "e");
        $i = substr_count($cadena, "i");
        $o = substr_count($cadena, "o");
        $u = substr_count($cadena, "u");

        echo "$strIni<br>";
        echo "La letra a aparece $a veces<br>";
        echo "La letra e aparece $e veces<br>";
        echo "La letra i aparece $i veces<br>";
        echo "La letra o aparece $o veces<br>";
        echo "La letra u aparece $u veces<br>";
        

    ?>
</body>
</html>