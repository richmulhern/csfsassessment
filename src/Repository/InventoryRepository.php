<?php

namespace App\Repository;

use App\Entity\Inventory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Inventory|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inventory|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inventory[]    findAll()
 * @method Inventory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InventoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Inventory::class);
    }

    public function findAllWithJoinToProduct(?string $filter = null, ?int $start = 0, ?int $max = 50): array
    {
        $entityManager = $this->getEntityManager();

        $sql = $this->buildFindQuery($filter);

        $query = $entityManager->createQuery($sql)
                    ->setFirstResult($start)
                    ->setMaxResults($max);

        if (isset($filter)) {
            $query->setParameter('filter', $filter);
        }

        return $query->getResult();
    }

    public function getInventoryCount(): int
    {
        // mysql will internally keep track of the total number of records in a
        // table, and since the requirement says to only display the total
        // number of inventory I will use this, unless that requirement was to
        // get a sum of quantities for all the inventory items...
        $sql = 'SHOW TABLE STATUS WHERE NAME = \'inventory\'';

        $entityManager = $this->getEntityManager();
        $query = $entityManager->getConnection()->prepare($sql);
        $query->execute();

        $result = $query->fetchAll();

        return (int) $result[0]['Rows'];
    }

    private function buildFindQuery(?string $filter = null): string
    {
        // I'm going to make the assumption here that every inventory record
        // has a valid product_id so I'll use left join because it is faster.
        // If that isn't a safe assumption I would just inner join. Also making
        // the assumption here that since the filter is an OR that one filter
        // parameter is enough
        $sql = 'SELECT i, p FROM App\Entity\Inventory i LEFT JOIN i.product p';

        if (isset($filter)) {
            $sql = $sql . ' WHERE i.sku = :filter OR i.productId = :filter';
        }

        return $sql;
    }
}
