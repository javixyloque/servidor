<?php
    use Doctrine\ORM\EntityManager;

    class EquipoRepository extends \Doctrine\ORM\EntityRepository {

        protected EntityManager $entityManager;

        public function __construct(EntityManager $em) {
            $this->entityManager = $em;
        }


        public function getLista($nombre_equipo) {

            $query = $this->entityManager->createQuery(
                'SELECT j
                FROM Jugador j
                JOIN j.equipo e
                WHERE e.nombre = :nombre_equipo'
            );

            $query->setParameter('nombre_equipo', $nombre_equipo);

            $result = $query->getResult();

            return $result ? $result : -1;
        }

    }

?>