<?php

namespace App\Controller;

use App\Entity\Inventory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

class InventoryController extends AbstractController
{
    /**
     * @Route("/api/inventory/total", name="inventory_total_api")
     */
    public function inventoryTotalApi(Request $request): JsonResponse
    {
        $invRepo = $this->getDoctrine()->getRepository(Inventory::class);

        $data = [
            'total' => $invRepo->getInventoryCount(),
        ];

        return new JsonResponse($data);
    }

    /**
     * @Route("/api/inventory/{start}/{filter}", name="inventory_api")
     */
    public function inventoryApi(Request $request, int $start = 0, ?string $filter = null): JsonResponse
    {
        $invRepo = $this->getDoctrine()->getRepository(Inventory::class);
        $inventory = $invRepo->findAllWithJoinToProduct($filter, $start);

        $serializer = $this->get('serializer');
        $invData = $serializer->serialize($inventory, 'json', [AbstractNormalizer::IGNORED_ATTRIBUTES => ['product']]);

        $data = [
            'start' => $start,
            'inventory' => json_decode($invData)
        ];

        return new JsonResponse($data);
    }
}