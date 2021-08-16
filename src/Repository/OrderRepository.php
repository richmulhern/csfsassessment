<?php

namespace App\Repository;

use App\Entity\Order;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Order|null find($id, $lockMode = null, $lockVersion = null)
 * @method Order|null findOneBy(array $criteria, array $orderBy = null)
 * @method Order[]    findAll()
 * @method Order[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Order::class);
    }

    public function findAllWithJoinToInventory(?string $filter = null, ?int $start = 0, ?int $max = 50): array
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

    public function getSalesValues(): array
    {
        $entityManager = $this->getEntityManager();

        $sql = 'SELECT sum(o.totalCents) AS sum, avg(o.totalCents) AS avg FROM App\Entity\Order o';

        $query = $entityManager->createQuery($sql);

        return $query->getSingleResult();
    }

    private function buildFindQuery(?string $filter = null): string
    {
        // requirement here says "filter on product or SKU" I'll assume that
        // means product_name and not product_id
        $sql = 'SELECT o, i, p FROM App\Entity\Order o LEFT JOIN o.inventory i LEFT JOIN i.product p';

        if (isset($filter)) {
            $sql = $sql . ' WHERE i.sku = :filter OR i.productId = :filter';
        }

        return $sql;
    }
}
