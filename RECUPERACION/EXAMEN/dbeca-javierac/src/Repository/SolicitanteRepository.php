<?php
use Doctrine\ORM\EntityRepository;

class SolicitanteRepository extends EntityRepository
{
    /**
     * Devuelve los equipos que son de una ciudad concreta.
     */
    public function findPorDni($dni)
    {
        $dql = 'SELECT s.*, b.descripcion, b.cantidad FROM solicitante s JOIN beca b WHERE e.dni = :dni';
        return $this->getEntityManager()->createQuery($dql)
                         ->setParameter('dni', $dni)
                         ->getResult();
    }




}