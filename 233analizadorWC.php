<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>233 - Analizador</title>
</head>
<body>
    <?php
        $input = "Pepito esta muerto vivo";
        $tok = strtok($input, " ");
        $contL = 0;
        echo "Frase: $input<br><br>";
        
        while ($tok) {
            echo "Tamaño de la palabra $tok: ".strlen($tok)." letras<br>";
            $contL +=strlen($tok);
            $tok =strtok(" ");
        }

        echo "Cantidad de letras total: $contL<br>";
        echo "Cantidad de palabras total: ".str_word_count($input);
        
    ?>
</body>
</html>