<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>220 - Alturas</title>
</head>
<body>
    <table>
        <thead><caption>Medias de alturas de los alumnos</caption></thead>
    <?php
        $altura = [
            "Josele" => 172,
            "Juanjo" => 192,
            "Alejandra" => 157,
            "Judith" => 183,
            "Perico" => 162
        ];

        foreach ($altura as $key => $value) {
            echo "<tr>";
            echo "<td>$key</td><td>$value cm</td>";
            echo "</tr>";
        }
        echo "<tr><td>Media</td><td>".array_sum($altura)/count($altura)." cm</td></tr>";

    ?>
    </table>
</body>
</html>