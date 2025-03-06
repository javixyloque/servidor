<?php
// Modifica el ejercicio anterior para que enviado un nombre vía URL me indique los habitantes y si está por encima o por debajo de la media (muestra la media).



$paises = [
    "España" => 46.75,
    "Francia" => 66.99,
    "Alemania" => 82.79,
    "Italia" => 60.52,
    "Reino Unido" => 66.67
];

$nomPais = $_GET["nom"] ?? "";
$total = 0;
$nPaises = 0;
$habComp = 0;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        
            <!-- TABLA DENSIDADES DE PAISES  -->
            <?php
                foreach ($paises as $pais => $habs) {
                    
                    $total += $habs;
                    $nPaises++;
                }

                $media = $total/$nPaises;

            ?>
            <!-- FILA DENSIDAD MEDIA -->
         
                <strong>Densidad Media:</strong>
                <strong><?= $media ?></strong>
            
        <?php
            foreach ($paises as $pais => $habitantes) {
                if ($pais === $nomPais) {
                    $habComp = $habitantes;
                }
            }


            if ($habComp < $media) {
                echo "<p>El pais $nomPais tiene $habComp millones de habitantes y está por debajo de la media.</p>";
            } else {
                echo "<p>El pais $nomPais tiene $habComp millones de habitantes y está en o por encima de la media.</p>";
            }
        ?>


</body>
</html>