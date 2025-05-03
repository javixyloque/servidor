<?php
//Carga tu fichero project bootstrap
require_once "bootstrap.php";
 
use Doctrine\ORM\Tools\Console\ConsoleRunner;
 
/*
Obtiene el EntityManager que se lo pasa a la consola
Podriamos crear una funcion en bootstrap y llamarla aqui
$entityManager = GetEntityManager();
o directamente usar los datos definidos en bootstrap
*/
 
return ConsoleRunner::createHelperSet($entityManager);
?>