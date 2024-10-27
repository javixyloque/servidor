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
            echo "Curriculum subido correctamente";

        } else {
            echo "Problema subiendo curriculum, intentelo de nuevo";
        }
        if (move_uploaded_file($pic, "subidos/".basename($foto))) {
            echo "Foto subida correctamente";

        } else {
            echo "Problema subiendo foto, intentelo de nuevo";
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
    <table>
        <caption><?= "$nombre $prApe $sgApe" ?></caption>
    </table>
    <tr>
        <td>DNI</td>
        
    <?= "<td>$dni</td>" ?>
    </tr>


    <!-- <iframe> PUEDE MOSTRAR PDF  -->
</body>
</html>
