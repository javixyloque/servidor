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
        for ($i = 0; $i<strlen($palabra)-1;$i++) {
            switch (ord($palabra)) {
                case "á":

            }
            // if (ord($palabra[$i]) == ord('é')||ord($palabra[$i]) == ord('á')|| ord($palabra[$i]) == ord('í')||ord($palabra[$i]) == ord('ú')|| ord($palabra[$i]) == ord('ó')) {
                
            // }
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
    $palabra = "owó";
    $ejemplo = palindroma($palabra);

    if ($ejemplo) {
        echo $palabra." se lee igual de adelante hacia atrás y viceversa, es palindroma<br>";
    } else {
        echo "$palabra no es palindroma porque al reves no es igual";
    }
    ?>

</body>
</html>