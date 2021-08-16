<?php

namespace App\Controller;

use App\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;


class SalesController extends AbstractController
{
    /**
     * @Route("/api/sales", name="sales_api")
     */
    public function salesApi(Request $request): JsonResponse
    {
        $ordRepo = $this->getDoctrine()->getRepository(Order::class);
        $saleData = $ordRepo->getSalesValues();

        return new JsonResponse($saleData);
    }
}