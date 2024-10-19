<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>238 - investiga</title>
</head>
<body>
    <?php
        // UCWORDS CONVIERTE LAS PRIMERAS LETRAS DE LAS PALABRAS DE UN STRING EN MAYUSCULAS
        // TITULOS, BIENVENIDAS, NOMBRES...

        $stringUC = "hola que tal muy buenas tardes a todos";
        $mostrar = ucwords($stringUC, " " ); // LOS SEPARADORES SON OPCIONALES, POR DEFECTO SON ESPACIOS
        
        echo "<strong>FUNCION ucwords:</strong> <br>";
        echo $stringUC."<br>";
        echo $mostrar."<br><br>";



        // STRREV DEVUELVE LA CADENA INVERSA A LA INTRODUCIDA

        $stringStrRev = "Alistate en la marina";
        $reversa = strrev($stringStrRev);

        echo "<strong>FUNCION strrev<br></strong>";
        echo $stringStrRev."<br>";
        echo $reversa."<br><br>";



        // STRREPEAT REPITE UNA CADENA LAS VECES QUE LE DIGAMOS

        $cadenaStrRep = "Muy buenas jose francisco";
        $repetido = str_repeat($cadenaStrRep,3);
        echo "<strong>FUNCION strrev<br></strong>";
        echo $cadenaStrRep."<br>";
        echo $repetido."<br><br>";



        // MD5 SE UTILIZA PARA GENERAR UN HASH DE 128 BITS (32 HEXADECIMALES) 
        // POR EJEMPLO PARA COMPROBAR CONTRASEñAS O INTEGRIDAD DE ARCHIVOS
        // OPINIONES REFLEJAN QUE A DIA DE HOY ES MEJOR NO USARLO DEBIDO A PROBLEMAS DE SEGURIDAD

        $cadenaMD= "Paralelepipedo";
        $hash = md5($cadenaMD); // TRUE PARA FORMATO BINARIO, FALSE (POR DEFECTO) PARA DECIMAL
        echo "<strong>FUNCION md5<br></strong>";
        echo $cadenaMD."<br>";
        echo $hash."<br><br>";
    ?>  
</body>
</html>