<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="inventory_id", columns={"inventory_id"}), @ORM\Index(name="product_id", columns={"product_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 */
class Order
{
    /**
     * @var float
     *
     * @ORM\Column(name="id", type="float", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float|null
     *
     * @ORM\Column(name="product_id", type="float", precision=10, scale=0, nullable=true)
     */
    private $productId;

    /**
     * @var float|null
     *
     * @ORM\Column(name="inventory_id", type="float", precision=10, scale=0, nullable=true)
     */
    private $inventoryId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street_address", type="string", length=100, nullable=true)
     */
    private $streetAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apartment", type="string", length=100, nullable=true)
     */
    private $apartment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=100, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_code", type="string", length=100, nullable=true)
     */
    private $countryCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="zip", type="float", precision=10, scale=0, nullable=true)
     */
    private $zip;

    /**
     * @var float|null
     *
     * @ORM\Column(name="phone_number", type="float", precision=10, scale=0, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="order_status", type="string", length=100, nullable=true)
     */
    private $orderStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_ref", type="string", length=100, nullable=true)
     */
    private $paymentRef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transaction_id", type="string", length=100, nullable=true)
     */
    private $transactionId;

    /**
     * @var float|null
     *
     * @ORM\Column(name="payment_amt_cents", type="float", precision=10, scale=0, nullable=true)
     */
    private $paymentAmtCents;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ship_charged_cents", type="float", precision=10, scale=0, nullable=true)
     */
    private $shipChargedCents;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ship_cost_cents", type="float", precision=10, scale=0, nullable=true)
     */
    private $shipCostCents;

    /**
     * @var float|null
     *
     * @ORM\Column(name="subtotal_cents", type="float", precision=10, scale=0, nullable=true)
     */
    private $subtotalCents;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_cents", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shipper_name", type="string", length=100, nullable=true)
     */
    private $shipperName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_date", type="string", length=100, nullable=true)
     */
    private $paymentDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shipped_date", type="string", length=100, nullable=true)
     */
    private $shippedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tracking_number", type="string", length=100, nullable=true)
     */
    private $trackingNumber;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tax_total_cents", type="float", precision=10, scale=0, nullable=true)
     */
    private $taxTotalCents;

    /**
     * @var string|null
     *
     * @ORM\Column(name="created_at", type="string", length=100, nullable=true)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="updated_at", type="string", length=100, nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Inventory", inversedBy="orders")
     */
    private $inventory;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getProductName(): ?string
    {
        return $this->inventory->getProductName();
    }

    public function getColor(): ?string
    {
        return $this->inventory->getColor();
    }

    public function getSize(): ?string
    {
        return $this->inventory->getSize();
    }

    public function getOrderStatus(): ?string
    {
        return $this->orderStatus;
    }

    public function getTotalCents(): ?float
    {
        return $this->totalCents;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function getShipperName(): ?string
    {
        return $this->shipperName;
    }

    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }
}
