<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Álvarez Centeno">
    <title>223 - Funcion capital</title>
</head>
<body>
    <?php

    function sacaCapital ($paisB = "") {
        $capCountry = [
            "España"  => "Madrid",
            "Italia" => "Roma",
            "Francia" => "Paris",
            "Portugal" => "Lisboa",
            "Reino Unido" => "Londres"
        ];

        foreach ($capCountry as $pais => $capi) {
            if ($paisB === "") {
                echo "$capi <br>";
            } else if ($pais === $paisB) {
                echo "$capi";
            }
        }
    }
    sacaCapital();
        

    ?>
</body>
</html>