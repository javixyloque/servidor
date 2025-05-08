<?php

try {
    require_once'./bootstrap.php';
    $query = $entityManager->createQuery('SELECT e FROM empleado e WHERE e.id = :id');
    $query->setParameter('id', 1);

    $empleado = $query->getSingleScalarResult();
} catch(Exception $e) {
    echo "Error". $e->getMessage();
} 

