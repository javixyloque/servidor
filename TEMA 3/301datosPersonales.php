<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = filtrado($nombre);
        $prApe = filtrado($prApe);
        $sgApe = filtrado($sgApe);
        $dni = filtrado($dni);
        $email = filtrado($email);
        $fechaNac = filtrado($fechaNac);
        $telefono = filtrado($telefono);
        $sexo = filtrado($sexo);
        
    }









    function filtrado ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>301 - Datos personales</title>
</head>
<body>
    <!-- Escribe un programa que pida nombre, primer apellido,
        segundo apellido, DNI, email, fecha de nacimiento, 
        teléfono, sexo, estudios (ESO, FP Grado Medio, Bachillerato,
        FP Grado Superior, Universitarios,...), idiomas, foto y currículum 
        (se almacena con los nombres dni.png y dni.pdf en la carpeta datosPersonales) 
        con el método POST. Pasa información "oculta" al enviar el formulario mediante un 
        input del tipo hidden para el tamaño de ficheros. Después los mostrará por pantalla:
        nombre con apellidos, edad,... --->
    
</body>
</html>
