<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecuacion 2º grado</title>
</head>
<body>
    <?php 
        $a = 3;
        $b = -5;
        $c = 2;

        $ecuacion;
        $discr = $b**2 - 4*$a*$c;
        echo "$discr";
        if ($discr > 0 ) {
            $ecuacion = (-$b+sqrt($b**2-(4*$a*$c)))/(2*$a);
            echo "Primera solución: $ecuacion";
            $ecuacion = (-$b-sqrt($b**2-(4*$a*$c)))/(2*$a);
            echo "Segunda solución: $ecuacion";

        } else if ($discr === 0) {
            $ecuacion = (-$b)/2*$a;
        } else {
            echo "La ecuación no tiene solución, el discriminante es negativo";
        }
        echo "$a + $ecuacion";
    ?>
</body>
</html>