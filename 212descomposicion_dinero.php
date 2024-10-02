
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javier" >
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
    $dinero = 967;
    $total = $dinero;
    $billetes = [500, 200, 100, 50, 20, 10, 5, 2, 1];
    $nuevosBill =[];
    $contador = 0;
        echo "Disponemos del total de $dinero euros<br>";
    
    ?>
    </h1>
    
    <hr>

    <h2>Los billetes que necesitamos para llegar a esa cantidad son: </h2>
    
    <p>
    <?php
    for ($i=0; $i<count($billetes); $i++){
        if ($dinero>=$billetes[$i]) {
            $dinero -= $billetes[$i];
            array_push($nuevosBill, $billetes[$i]);
            $contador++;
        }
    }


    foreach ($nuevosBill as $billete) {
        echo "$billete - ";
    }
    echo " Todos estos billetes ($contador) suman <strong>$total €</strong>";
    ?>
    </p>

</body>
</html>
    

