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

    // NO HE SIDO CAPAZ DE HACER QUE IGNORE LAS TILDES :)
    $palabra = "elegele";
    function palindroma ($palabra) {
        $palReves = "";
        for ($i = 0; $i<strlen($palabra)-1;$i++) {
            switch ($palabra[$i]) {
                case 'á': 
                    $palReves .= 'a';
                    $i++;
                    break;
                case 'é':
                    $palReves .= 'e';
                    $i++;
                    break;
                case 'í':
                    $palReves .= 'i';
                    $i++;
                    break;
                case 'ó':
                    $palReves .= 'o';
                    $i++;
                    break;
                case 'ú':
                    $palReves .= 'u';
                    $i++;
                    break;
            }

        }

        for ($i = strlen($palabra)-1; $i >= 0 ; $i--) {
            $palReves.=$palabra[$i];
        }

        echo $palabra." al revés es: ".$palReves."<br>";
        
        if ($palabra == $palReves) {
            return true;
        } else {
            return false;
        }
    }
    
    $ejemplo = palindroma($palabra);

    if ($ejemplo) {
        echo $palabra." se lee igual de adelante hacia atrás y viceversa, es palindroma<br>";
    } else {
        echo "$palabra no es palindroma porque al reves no es igual";
    }
    ?>

</body>
</html>