<?php
use Doctrine\ORM\EntityRepository;

class EquipoRepository extends EntityRepository
{
    /**
     * Devuelve los equipos que son de una ciudad concreta.
     */
    public function findByCiudad($ciudad)
    {
        $dql = 'SELECT e FROM Equipo e WHERE e.ciudad = :ciudad';
        return $this->getEntityManager()->createQuery($dql)
                         ->setParameter('ciudad', $ciudad)
                         ->getResult();
    }

    /**
     * Devuelve los equipos con más de X socios.
     */
    public function findConMasDeXSocios($sociosMinimos)
    {
        $dql = 'SELECT e FROM Equipo e WHERE e.socios > :sociosMinimos';
        return $this->getEntityManager()->createQuery($dql)
                         ->setParameter('sociosMinimos', $sociosMinimos)
                         ->getResult();
    }

    /**
     * Actualiza el número de socios de un equipo por su id.
     */
    public function actualizarSocios($id, $socios)
    {
        $dql = 'UPDATE Equipo e SET e.socios = :socios WHERE e.id = :id';
        $query = $this->getEntityManager()->createQuery($dql)
                           ->setParameter('socios', $socios)
                           ->setParameter('id', $id);
        $query->execute();
    }

    
}
