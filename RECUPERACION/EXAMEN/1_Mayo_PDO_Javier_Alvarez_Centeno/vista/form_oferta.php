
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

$empresa = selectEmpresa($_SESSION['empresa']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuevaOferta
    </title>
</head>
<body>
    <h1>Nueva oferta</h1>
    <form action="../scripts/anadir_oferta.php" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" required><br><br>
        <label for="titulo">Sueldo</label>
        <input type="number" name="sueldo" min="1163" max="900000" required><br><br>
        <label for="jornada">Jornada</label>
        <select id="jornada" name="jornada" required>
            <option value="manana">Mañana</option>
            <option value="tarde">Tarde</option>
            <option value="partida">Partida</option>
        </select><br><br>
        <label for="titulo">Ciudad</label>
        <input type="text" name="ciudad"><br><br>
        <label for="titulo">Fecha</label>
        <input type="date" name="fecha" required><br><br>

        <input type="hidden" name="$id_empresa" value=<?=$empresa['id'] ?>>

        <button type="submit">Añadir</button>
    </form>




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