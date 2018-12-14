<?php

namespace App\Repository;

use App\Entity\Washer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Washer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Washer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Washer[]    findAll()
 * @method Washer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WasherRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Washer::class);
    }

    // /**
    //  * @return Washer[] Returns an array of Washer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Washer
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
