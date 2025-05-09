<?php
//INCLUYE COMPOSER AUTOLOAD (RELATIVO A LA RAIZ DEL PROYECTO)
require_once "./vendor/autoload.php";
require_once "./src/Entity/EquipoBidireccional.php";
require_once "./src/Entity/JugadorBidireccional.php";
require_once "./src/Entity/Equipo.php";
require_once "./src/Entity/Jugador.php";
require_once "./src/Entity/EquipoRepository.php";



use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
$paths = array(__DIR__."/src");
$isDevMode = true;


// CONFIGURACION DE LA BASE DE DATOS
$dbParams = [
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    'dbname' => 'equipo_jugador',
    'host' => '127.0.0.1', // 👈 usa esto, no 'localhost'
    'port' => 3306
];



// UTILIZARA ANOTACIONES COMO RUTAS A ENTIDADES, DEPURACION, DIRECTORIO TEMPORAL CON CACHÉ...

// SALE TACHADO PORQUE ESTÁ DEPRECATED

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, FALSE);
$entityManager = EntityManager::create($dbParams, $config);





    function filtrado ($data) {
        $data = trim($data);
        $data = strip_tags($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>