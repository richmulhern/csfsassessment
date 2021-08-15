<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products", indexes={@ORM\Index(name="admin_id", columns={"admin_id"})})
 * @ORM\Entity
 */
class Products
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
     * @ORM\Column(name="product_name", type="string", length=33, nullable=true)
     */
    private $productName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=198, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="style", type="string", length=18, nullable=true)
     */
    private $style;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand", type="string", length=30, nullable=true)
     */
    private $brand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_at", type="string", length=19, nullable=true)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="updated_at", type="string", length=19, nullable=true)
     */
    private $updatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=3, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="product_type", type="string", length=12, nullable=true)
     */
    private $productType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shipping_price", type="string", length=14, nullable=true)
     */
    private $shippingPrice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=4, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_id", type="string", length=8, nullable=true)
     */
    private $adminId;


}
