<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRASE IMPARES</title>
</head>
<body>
    <form action="fraseImpares.php" method="get">
        <label for="frase">Escribe la frase que quieres sacar las impares</label>
        <input type="text" name="input">
        <input type="submit" value="Invertir">
    </form>
    <?php
        $frase = isset($_GET['input']) ? $_GET['input']: "";

        function impares ($input):string {
            $nuevaFrase="";
            for ($i = 0; $i < strlen($input); $i++) {
                if ($input[$i] == " ") {
                    $nuevaFrase .= " ";
                } else {
                    if ($i%2===1) {
                        $nuevaFrase .= $input[$i]; 
                    }
                }
            }
            return $nuevaFrase;
        }
        echo $frase."<br>";
        echo impares ($frase);
    ?>
</body>
</html>