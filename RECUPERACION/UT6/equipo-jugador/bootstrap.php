<?php
//bootstrap.php
//Include composer autoload (relative to project root)
require_once("./vendor/autoload.php");
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
$paths = array("./src");
$isDevMode=true;
//configuracion de la base de datos
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'equipo_jugador',
    'host'     => '127.0.0.1:3306',
);
//utilizara anotaciones
//ruta de las entidades
//si estamos en modo desarrollo si queremos hacer depuracion
//directorio temporal
//sistema cache
//si usa un tipo lestor de anotaciones simple
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode,null,null,false);
$entityManager =EntityManager::create($dbParams, $config);
?>