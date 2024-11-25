<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>222 - Función semana</title>
</head>
<body>
    <h1>
        <?php 
            
            function irCine() {
                $dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
                
                $numDias = count($dias)-1;
                return $dias[rand(0, $numDias)];
            }

                echo "Vamos a ir al cine el ".irCine();

            ?>
    </h1>
</body>
</html>