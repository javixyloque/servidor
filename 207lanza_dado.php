<?php 
    $fin = 10;
    $salir = false;
    do {
        echo "Tirando dado...";
        $num =rand(1, 6);
        echo $num."<br>";
        if ($num == 5) {
            $salir = true;
        }
        $fin--;
    } while ($fin>0 && !$salir);
    
    if (!$salir) {
        echo "<br> No se ha conseguido obtener el 5 en 10 intentos";
    }
    

?>