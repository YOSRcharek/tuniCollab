<?php

namespace App\Repository;

use App\Entity\Dede;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dede>
 *
 * @method Dede|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dede|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dede[]    findAll()
 * @method Dede[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DedeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dede::class);
    }

//    /**
//     * @return Dede[] Returns an array of Dede objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Dede
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
