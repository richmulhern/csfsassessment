<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products", indexes={@ORM\Index(name="admin_id", columns={"admin_id"})})
 * @ORM\Entity
 */
class Product
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

    /**
    * @ORM\OneToMany(targetEntity="App\Entity\Inventory", mappedBy="product")
    */
    private $inventory;

    public function __construct()
    {
        $this->inventory = new ArrayCollection();
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setStyle(?string $style): self
    {
        $this->style = $style;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getProductType(): ?string
    {
        return $this->productType;
    }

    public function setProductType(?string $productType): self
    {
        $this->productType = $productType;

        return $this;
    }

    public function getShippingPrice(): ?string
    {
        return $this->shippingPrice;
    }

    public function setShippingPrice(?string $shippingPrice): self
    {
        $this->shippingPrice = $shippingPrice;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getAdminId(): ?string
    {
        return $this->adminId;
    }

    public function setAdminId(?string $adminId): self
    {
        $this->adminId = $adminId;

        return $this;
    }

    /**
     * @return Collection|Inventory[]
     */
    public function getInventory(): Collection
    {
        return $this->inventory;
    }

    public function addInventory(Inventory $inventory): self
    {
        if (!$this->inventory->contains($inventory)) {
            $this->inventory[] = $inventory;
            $inventory->setProduct($this);
        }

        return $this;
    }

    public function removeInventory(Inventory $inventory): self
    {
        if ($this->inventory->removeElement($inventory)) {
            // set the owning side to null (unless already changed)
            if ($inventory->getProduct() === $this) {
                $inventory->setProduct(null);
            }
        }

        return $this;
    }
}
