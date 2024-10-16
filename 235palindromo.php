<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>235 - Palindromo</title>
</head>
<body>
    <?php
    function palindroma ($palabra) {
        $palReves = "";
        for ($i = strlen($palabra)-1; $i >= 0 ; $i--) {
            $palReves.=$palabra[$i];
        }
        echo $palabra." al revés es: ".$palReves."<br>";
        if ($palabra == $palReves) {
            echo $palabra." se lee igual de adelante hacia atrás y viceversa, es palindroma<br>";
        }
    }
    palindroma("owo");

    ?>
</body>
</html>