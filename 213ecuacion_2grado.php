<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>213 - Ecuacion 2º grado</title>
</head>
<body>
    <?php 
        $a = 3;
        $b = -5;
        $c = 2;

        $ecuacion;
        $discr = $b**2 - 4*$a*$c;
        if ($discr > 0 ) {
            $ecuacion = (-$b+sqrt($b**2-(4*$a*$c)))/(2*$a);
            echo "Primera solución: $ecuacion <br>";
            $ecuacion = (-$b-sqrt($b**2-(4*$a*$c)))/(2*$a);
            echo "Segunda solución: $ecuacion <br>";

        } else if ($discr === 0) {
            $ecuacion = (-$b)/2*$a;
        } else {
            echo "La ecuación no tiene solución, el discriminante es negativo";
        }

    ?>
</body>
</html>