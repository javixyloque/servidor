<?php
// JAVIER ALVAREZ CENTENO
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require_once '../controlador/controlador.php';

if (!isset($_SESSION['empresa'])) {
    header('Location: ../vista');
    exit;
}
$id = intval(filtrado($_GET['id']) ?? null);

$ofertas = selectOfertasEmpresa($id);
$email = $_SESSION['empresa'] ?? '';
$empresa= selectEmpresa($_SESSION['empresa']);
// foreach ($ofertas as $oferta) {
//     echo "Titulo -> ".$oferta['titulo']."<br>
//     Sueldo -> ".$oferta['sueldo']."&euro;<br>
//     Tipo de jornada -> ".$oferta['jornada']."<br><br>";
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas de <?= $empresa['nombre'] ?></title>
</head>
<body>
    <h2>Ofertas de la empresa <?= $empresa['nombre'] ?></h2>
    <table>
        <thead><tr>

            <th>Titulo</th>
            <th>Sueldo</th>
            <th>Jornada</th>
            <th>Ciudad</th>
            <th>Fecha</th>
            <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ofertas as $oferta) {?>
                <tr>
                    <td><?= $oferta['titulo'] ?></td>
                    <td><?= $oferta['sueldo'] ?></td>
                    <td><?= $oferta['jornada'] ?></td>
                    <td><?= $oferta['ciudad'] ?></td>
                    <td><?= $oferta['fecha'] ?></td>
                    <td><a href="../scripts/eliminar_oferta.php?id=<?= $oferta['id']?>">Eliminar</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>



    <a href="./form_oferta.php">
        Añadir nueva oferta
    </a>


    <?php if (isset($_SESSION['empresa'])) {?>

<ul>
    <li>Email: <?= $empresa['email'] ?></li>
    <li>Nombre: <?= $empresa['nombre']?></li>
    <li>Representante: <?=$empresa['responsable']?></li>
    <li>imagen: <img  height="100" width="100" src="data:image/jpeg;base64,<?= base64_encode($empresa['imagen']) ?>" /></li>
</ul>

<a href="./ofertas_empresa.php?id=<?=$empresa['id']?>">Ver ofertas de la empresa</a>
<a href="../scripts/cerrar_sesion.php">Cerrar sesion</a>

<?php }?>
</body>
</html>



<!-- echo '<td><form action="../scripts/update_concepto.php" method="post">
                        <input type="hidden" name="id" value='.$transaccion['id'].'>
                                <input type="text" name="concepto" value="'.$transaccion['concepto'].'">
                                <input type="submit" value="Actualizar">
                            </form></td>'; -->