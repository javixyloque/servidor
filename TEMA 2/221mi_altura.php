<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>221 - Mi Altura</title>
</head>
<body>
<table border="solid 2px">
        <thead><th colspan="2">Alturas alumnos</th></thead>
    <?php



        $altura = [
            "Josele" => 172,
            "Juanjo" => 192,
            "Alejandra" => 157,
            "Judith" => 183,
            "Perico" => 162
        ];

        $altMedia = array_sum($altura)/count($altura);

        foreach ($altura as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td><td>$value cm</td>";
            echo "</tr>";
        }
        echo "<tr><td>Media</td><td><strong>$altMedia cm</strong></td></tr>";

    ?>
    </table>

    <?php
        $miAltura = $_GET['alt'];
        if (isset($miAltura)) {
            echo "<br><br><h3>Tu altura : $miAltura cm</h3><br><br>";
            if ($miAltura < $altMedia) {
                echo "Tu altura esta por debajo de la media &#x2639;";
            } else if ($miAltura == $altMedia) {    // NO SE PUEDE COMPARAR ESTRICTAMENTE, EL GET DEVUELVE UN STRING
                echo "Tu altura es justo la altura media";
            } else {
                echo "Tu altura esta por encima de la media !!  &#x263a;";
            }
        }
        
        
    ?>
</body>
</html>