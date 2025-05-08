<?php
// src/Repository/EmpleadoRepository.php
namespace Javixyloque\EquipoJugador\Repository;
require_once'../Entity/Empleado.php';

use Doctrine\ORM\EntityRepository;

class EmpleadoRepository extends EntityRepository
{
    // Puedes añadir métodos personalizados aquí
    public function empleadoId($id) {
        $sql = "SELECT e from empleado where e.id = :identificador";
        return $this->getEntityManager()
                    ->createQuery($sql)
                    ->setParameter('identificador', $id)
                    ->getSingleScalarResult();
    }
}
