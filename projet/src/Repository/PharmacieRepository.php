<?php

namespace App\Repository;

use App\Entity\Pharmacie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Elastica\Query;
use Elastica\Query\MatchQuery;
/**
 * @extends ServiceEntityRepository<Pharmacie>
 */
class PharmacieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pharmacie::class);
    }

    //    /**
//     * @return Pharmacie[] Returns an array of Pharmacie objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

    //    public function findOneBySomeField($value): ?Pharmacie
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function searchByName(string $name): array
{
    return $this->createQueryBuilder('p')
        ->where('p.nom LIKE :name')
        ->setParameter('name', '%' . $name . '%')
        ->getQuery()
        ->getResult();
}
public function findAllWithSorting(?string $sort = 'nom', ?string $order = 'asc')
{
    $qb = $this->createQueryBuilder('p');

    $allowedSortFields = ['nom', 'adresse', 'ville', 'type'];
    if (in_array($sort, $allowedSortFields)) {
        $qb->orderBy('p.' . $sort, $order === 'desc' ? 'DESC' : 'ASC');
    }

    return $qb->getQuery()->getResult();
}


}
