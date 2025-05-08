<?php
$dado = [];
$contador = 0;

// BUCLE PARA GENERAR NUMEROS ALEATORIOS Y METERLOS DENTRO DEL ARRAY

for ($i = 0; $i < 20; $i++) {
    $dado[$i] = rand(1, 20);
    if ($dado[$i] === 5) {
        echo "El número 5 ha salido en el intento número: ".($i+1)."<br>";
        $contador++;
        break;
    } 
}

// BUCLE PARA MOSTRAR RESULTADOS
for ($i = 0; $i<count($dado); $i++) {

    echo "Intento ". $i+1 .": $dado[$i] <br>";
}

// SI EL CONTADOR ES 0, NO ESTÁ
if ($contador === 0) {
    echo "<br><br>No se ha encontrado el número 5<br><br>";
}


var_dump($dado);

?>