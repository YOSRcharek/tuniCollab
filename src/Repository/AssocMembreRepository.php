<?php

namespace App\Repository;

use App\Entity\AssocMembre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AssocMembre>
 *
 * @method AssocMembre|null find($id, $lockMode = null, $lockVersion = null)
 * @method AssocMembre|null findOneBy(array $criteria, array $orderBy = null)
 * @method AssocMembre[]    findAll()
 * @method AssocMembre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AssocMembreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AssocMembre::class);
    }

//    /**
//     * @return AssocMembre[] Returns an array of AssocMembre objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AssocMembre
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
