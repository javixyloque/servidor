<?php

namespace App\Repository;

use App\Entity\Solicitante;
use App\Entity\Beca;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Solicitante>
 */
class SolicitanteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Solicitante::class);
    }

    //    /**
    //     * @return Solicitante[] Returns an array of Solicitante objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Solicitante
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function findByTipoBeca($id_beca) {
        return $this->getEntityManager()->createQuery("SELECT s FROM solicitante s JOIN beca b ON s.beca_id = b.id WHERE b.id = :id") ->setParameter('id', $id_beca)->getResult();
    }

    // public function findByCiudad($ciudad)
    // {
    //     $dql = 'SELECT e FROM Equipo e WHERE e.ciudad = :ciudad';
    //     return $this->getEntityManager()->createQuery($dql)
    //                      ->setParameter('ciudad', $ciudad)
    //                      ->getResult();
    // }
}
