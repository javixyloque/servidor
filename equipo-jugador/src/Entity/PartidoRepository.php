<?php

use Doctrine\ORM\EntityManager;

class PartidoRepository extends \Doctrine\ORM\EntityRepository
{
    private EntityManager $entityManager;

    public function __construct( EntityManager $em)
    {
        
        $this->entityManager = $em;
    }

    // PARTIDOS VISITANTE
    public function findPartidosComoVisitante($equipoId)
    {
        return $this->createQueryBuilder('p')
            ->where('p.visitante = :equipo')
            ->setParameter('equipo', $equipoId)
            ->getQuery()
            ->getResult();
    }

    // VICTORIAS COMO LOCAL
    public function countVictoriasLocal($equipoId)
    {
        return $this->createQueryBuilder('p')
            ->select('COUNT(p.id)')
            ->where('p.local = :equipo')
            ->andWhere('p.golesLocal > p.golesVisitante')
            ->setParameter('equipo', $equipoId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    // TODOS LOS PARTIDOS DE UN EQUIPO
    public function findPartidosDeEquipo($equipoId)
    {
        return $this->createQueryBuilder('p')
            ->where('p.local = :equipo OR p.visitante = :equipo')
            ->setParameter('equipo', $equipoId)
            ->getQuery()
            ->getResult();
    }
}
