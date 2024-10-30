<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>Ejercicio 2</title>
</head>
<body>
    <table>
        
            <?php
                $datos_notas =[];

                for ($i=0; $i<90; $i++) {
                    array_push($datos_notas, rand(0, 10));
                    
                }
                $claseA= array_slice($datos_notas, 0, 30);
                $claseB = array_slice($datos_notas, 30, 30);
                $claseC = array_slice($datos_notas, 60, 30);

                print_r($datos_notas);
                echo "<br><br>";
                print_r($claseA);
                print_r($claseB);
                print_r($claseC);


                $suspensos = 0;
                $notaTotal = 0;


                foreach ($claseA as $nota) {
                    $notaTotal+=$nota;
                    if ($nota < 5) {
                        $suspensos++;
                    }
                    
                }

                $resultA = [
                    "Suspensos" => 0,
                    "Aprobados" => 0,
                    "Media" => $notaTotal/count($claseA)
                ];

                $resultA["Suspensos"] = $suspensos;
                $resultA["Aprobados"] = count($claseA)-$suspensos;

                print_r($resultA);

                $suspensos = 0;
                $notaTotal = 0;


                foreach ($claseB as $nota) {
                    $notaTotal+=$nota;
                    if ($nota < 5) {
                        $suspensos++;
                    }
                    
                }

                $resultB = [
                    "Suspensos" => 0,
                    "Aprobados" => 0,
                    "Media" => $notaTotal/count($claseB)
                ];

                $resultB["Suspensos"] = $suspensos;
                $resultB["Aprobados"] = count($claseB)-$suspensos;

                print_r($resultB);

                $suspensos = 0;
                $notaTotal = 0;


                foreach ($claseC as $nota) {
                    $notaTotal+=$nota;
                    if ($nota < 5) {
                        $suspensos++;
                    }
                    
                }

                $resultC = [
                    "Suspensos" => 0,
                    "Aprobados" => 0,
                    "Media" => $notaTotal/count($claseC)
                ];

                $resultC["Suspensos"] = $suspensos;
                $resultC["Aprobados"] = count($claseC)-$suspensos;

                print_r($resultC);


            ?>    
            <tbody>
                <thead>
                    <th></th>
                    <th>CLASE A</th>
                    <th>CLASE B</th>
                    <th>CLASE C</th>
                    <th>TOTAL</th>
                </thead>
                <tr>
                    <td>MEDIA</td>
                    <?php
                        if ($resultA["Media"]> $resultB["Media"]&& $resultA["Media"]>$resultC["Media"]) {
                            echo "<td bgcolor='green'>{$resultA["Media"]}</td>
                            <td> {$resultB["Media"]}</td>
                            <td> {$resultC["Media"]}</td>";
                        } else if ($resultB["Media"]> $resultA["Media"]&& $resultB["Media"]>$resultC["Media"]) {
                            echo "<td>{$resultA["Media"]}</td>
                            <td bgcolor='green'>{$resultB["Media"]}</td>
                            <td>{$resultC["Media"]}</td>";
                        } else if ($resultC["Media"]> $resultB["Media"]&& $resultC["Media"]>$resultA["Media"]) {
                            echo "<td bgcolor='green'>{$resultA["Media"]}</td>
                            <td>{$resultB["Media"]}></td>
                            <td bgcolor='green'>{$resultC["Media"]}</td>";

                        }
                    ?>
                    
                    <td><?= ($resultA["Media"]+$resultB["Media"]+$resultC["Media"])/3?></td>
                </tr>
                <tr>
                    <td>APROBADOS</td>
                    
                    <td><?= $resultA["Aprobados"]?></td>
                    <td><?= $resultB["Aprobados"]?></td>
                    <td><?= $resultC["Aprobados"]?></td>
                    <td><?= ($resultA["Aprobados"]+$resultB["Aprobados"]+$resultC["Aprobados"])?></td>
                </tr>
                <tr>
                    <td>SUISPENSOS</td>
                    <td><?= $resultA["Suspensos"]?></td>
                    <td><?= $resultB["Suspensos"]?></td>
                    <td><?= $resultC["Suspensos"]?></td>
                    <td><?= ($resultA["Suspensos"]+$resultB["Suspensos"]+$resultC["Suspensos"])?></td>
                </tr>
            </tbody>
</table>
</body>
</html>
