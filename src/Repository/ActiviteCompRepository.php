<?php

namespace App\Repository;

use App\Entity\ActiviteComp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ActiviteComp|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActiviteComp|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActiviteComp[]    findAll()
 * @method ActiviteComp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActiviteCompRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActiviteComp::class);
    }

    // /**
    //  * @return ActiviteComp[] Returns an array of ActiviteComp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ActiviteComp
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
