<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = isset($_POST['nombre']) ? ucwords(filtrado($_POST['nombre'])): '';
        $prApe = isset($_POST['prApe']) ? ucwords(filtrado($_POST['prApe'])): '';
        $sgApe = isset($_POST['sgApe']) ? ucwords(filtrado($_POST['sgApe'])):'';
        $dni = isset($_POST['dni']) ? filtrado($_POST['dni']):"";
        $email = isset($_POST['email']) ? filtrado($_POST['email']):"";
        $fechaNac = isset($_POST['fechaNac']) ? filtrado($_POST['fechaNac']):"";
        $telefono = isset($_POST['telefono']) ? filtrado($_POST['telefono']):"";
        $sexo = isset($_POST['sexo']) ? filtrado($_POST['sexo']):"";
        $estudios = isset(($_POST["estudios"])) ? filtrado($_POST["estudios"]) : "";
        $idiomas = isset ($_POST['idiomas']) ? explode(", ", $_POST["idiomas"]): "";
        $nomCurr = isset ($_FILES['cv']['name']) ? $_FILES['cv']['name']: "";
        $nomFoto = isset ($_FILES['foto']['name']) ? $_FILES['foto']['name']: '';


        $currV = $_FILES["cv"]['tmp_name'];
        $pic = $_FILES['foto']['tmp_name'];


        if (move_uploaded_file($currV, "subidos/".basename($nomCurr))) {
            echo "Curriculum subido correctamente<br>";

        } else {
            echo "Problema subiendo curriculum, intentelo de nuevo<br>";
        }
        if (move_uploaded_file($pic, "subidos/".basename($nomFoto))) {
            echo "Foto subida correctamente<br>";

        } else {
            echo "Problema subiendo foto, intentelo de nuevo<br>";
        }
    }

    function filtrado ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function mostrarArray ($array) {
        foreach ($array as $elemento) {
            echo "$elemento <br>";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>301 - Datos personales</title>
    <style>
        table {
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Escribe un programa que pida nombre, primer apellido,
        segundo apellido, DNI, email, fecha de nacimiento, 
        teléfono, sexo, estudios (ESO, FP Grado Medio, Bachillerato,
        FP Grado Superior, Universitarios,...), idiomas, cv y currículum 
        (se almacena con los nombres dni.png y dni.pdf en la carpeta datosPersonales) 
        con el método POST. Pasa información "oculta" al enviar el formulario mediante un 
        input del tipo hidden para el tamaño de ficheros. Después los mostrará por pantalla:
        nombre con apellidos, edad,... --->
    <table border="solid 2px" cellspacing="0" width="100%" height="80%" align="center">
        <thead border="solid 2px">
        <caption><h1><?= "$nombre $prApe $sgApe" ?></h1></caption>
        </thead>
    <tbody>
    <tr>
        <td><strong>DNI</strong></td><?= "<td>$dni</td>" ?>
        <td rowspan="3"> <?php
            echo "<img width=200px height=200px src=subidos/".$nomFoto."></img>";
        ?></td>
        
        
    </tr>
    
    <tr>
        <td><strong>Email</strong></td>
        <td><?= $email ?></td>
    </tr>
    <tr>
        <td><strong>Fecha de nacimiento</strong></td>
        <td><?= $fechaNac ?></td>
    </tr>
    <tr>
        <td><strong>Telefono</strong></td>
        <td><?= $telefono ?></td>
        <td rowspan="4"><?= "<iframe src='subidos/".$nomCurr."' width='500px' height='500px'> Descargar CV</iframe>"?></td>
    </tr>

    <tr>
        <td><strong>Sexo</strong></td>
        <td><?= $sexo ?></td>
    </tr>

    <tr>
        <td><strong>Estudios</strong></td>
        <td><?= $estudios ?></td>
    </tr>
    <tr>
        <td><strong>Idiomas</strong></td>
        <td><?= mostrarArray($idiomas)?></td>

    </tr>
    
    </tbody>
    </table>
    


    <!-- <iframe> PUEDE MOSTRAR PDF  -->
</body>
</html>
