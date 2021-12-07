<?php

namespace App\Repository;

use App\Entity\PetitionParticipant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PetitionParticipant|null find($id, $lockMode = null, $lockVersion = null)
 * @method PetitionParticipant|null findOneBy(array $criteria, array $orderBy = null)
 * @method PetitionParticipant[]    findAll()
 * @method PetitionParticipant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PetitionParticipantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PetitionParticipant::class);
    }

    // /**
    //  * @return PetitionParticipant[] Returns an array of PetitionParticipant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PetitionParticipant
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
