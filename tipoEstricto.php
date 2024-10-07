<?php 
declare(strict_types=1);

    function suma(int $a, int $b) : int {
        return $a + $b;
    }

    $num = 33;
    echo suma(10, 30);
    echo suma(10, $num);
    echo suma("10", 30); // error por tipificación estricta, sino daría 40
    ?>
