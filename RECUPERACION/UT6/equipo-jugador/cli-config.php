<?php
// CARGAR FICHERO PROJECT BOOSTRAP

require_once './bootstrap.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;

// CARGAR ENTITY MANAGER, PASARLO A LA CONSOLA Y DEVOLVER ESA CONSOLA 


return ConsoleRunner::createHelperSet($entityManager);


?>