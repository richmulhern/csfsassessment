<?php

namespace App\Controller;

use App\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

class OrderController extends AbstractController
{
    /**
     * @Route("/api/orders/{start}/{filter}", name="order_api")
     */
    public function orderApi(Request $request, int $start = 0, ?string $filter = null): JsonResponse
    {
        $ordRepo = $this->getDoctrine()->getRepository(Order::class);
        $orders = $ordRepo->findAllWithJoinToInventory($filter, $start);

        $serializer = $this->get('serializer');
        $ordData = $serializer->serialize($orders, 'json', [AbstractNormalizer::IGNORED_ATTRIBUTES => ['product']]);

        $saleData = $ordRepo->getSalesValues();

        $data = [
            'orders' => json_decode($ordData)
        ];

        return new JsonResponse($data);
    }
}