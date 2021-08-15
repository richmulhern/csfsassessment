<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventory
 *
 * @ORM\Table(name="inventory", indexes={@ORM\Index(name="product_id", columns={"product_id"})})
 * @ORM\Entity
 */
class Inventory
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="product_id", type="string", length=10, nullable=true)
     */
    private $productId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="quantity", type="string", length=8, nullable=true)
     */
    private $quantity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=12, nullable=true)
     */
    private $color;

    /**
     * @var string|null
     *
     * @ORM\Column(name="size", type="string", length=4, nullable=true)
     */
    private $size;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weight", type="string", length=6, nullable=true)
     */
    private $weight;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_cents", type="string", length=11, nullable=true)
     */
    private $priceCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sale_price_cents", type="string", length=16, nullable=true)
     */
    private $salePriceCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cost_cents", type="string", length=10, nullable=true)
     */
    private $costCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sku", type="string", length=6, nullable=true)
     */
    private $sku;

    /**
     * @var string|null
     *
     * @ORM\Column(name="length", type="string", length=6, nullable=true)
     */
    private $length;

    /**
     * @var string|null
     *
     * @ORM\Column(name="width", type="string", length=5, nullable=true)
     */
    private $width;

    /**
     * @var string|null
     *
     * @ORM\Column(name="height", type="string", length=6, nullable=true)
     */
    private $height;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=4, nullable=true)
     */
    private $note;


}
