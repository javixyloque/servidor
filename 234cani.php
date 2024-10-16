<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>234 - Cani</title>
</head>
<body>
    <?php
    $input = "Si el muxaxo te basila tu t kaya i lo asimila";
    
    echo convierteCani($input);
    function convierteCani ($frase) {
        $fraseCani = "";
        $alternar = true;
        for ($i = 0; $i<strlen($frase); $i++) {
            if ($frase[$i]=== " ") {
                $fraseCani.= " ";
            } else {
                if ($alternar) {
                    $frase[$i] = strtoupper($frase[$i]); 
                } else {
                    $frase[$i] = strtolower($frase[$i]);
                }
                $alternar = $alternar ? false : true; 
            }
        }
        return $frase;
    }
    
    ?>
</body>
</html>