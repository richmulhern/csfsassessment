<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User implements UserInterface, EquatableInterface//, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=32, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password_hash", type="string", length=60, nullable=true)
     */
    private $passwordHash;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password_plain", type="string", length=14, nullable=true)
     */
    private $passwordPlain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="superadmin", type="string", length=10, nullable=true)
     */
    private $superadmin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shop_name", type="string", length=27, nullable=true)
     */
    private $shopName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remember_token", type="string", length=14, nullable=true)
     */
    private $rememberToken;

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
     * @ORM\Column(name="card_brand", type="string", length=10, nullable=true)
     */
    private $cardBrand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="card_last_four", type="string", length=14, nullable=true)
     */
    private $cardLastFour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trial_ends_at", type="string", length=19, nullable=true)
     */
    private $trialEndsAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shop_domain", type="string", length=27, nullable=true)
     */
    private $shopDomain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_enabled", type="string", length=10, nullable=true)
     */
    private $isEnabled;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billing_plan", type="string", length=12, nullable=true)
     */
    private $billingPlan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trial_starts_at", type="string", length=19, nullable=true)
     */
    private $trialStartsAt;

    public function getId()
    {
        return $this->id;
    }

    public function getPassword()
    {
        return $this->passwordPlain;
    }

    public function getUsername()
    {
        return $this->email;
    }

    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function getSalt()
    {
        return '';
    }

    public function eraseCredentials()
    {
        return;
    }

    public function isEqualTo(UserInterface $user)
    {

        /*if ($this->id !== $user->getPassword()) {
            return false;
        }

        if ($this->getSalt() !== $user->getSalt()) {
            return false;
        }

        if ($this->getUsername() !== $user->getUsername()) {
            return false;
        }*/

        return true;
    }

    public function serialize()
    {
        return serialize($this->id);
    }

    public function unserialize($data)
    {
        $data = unserialize($data);
        return $data;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPasswordHash(): ?string
    {
        return $this->passwordHash;
    }

    public function setPasswordHash(?string $passwordHash): self
    {
        $this->passwordHash = $passwordHash;

        return $this;
    }

    public function getPasswordPlain(): ?string
    {
        return $this->passwordPlain;
    }

    public function setPasswordPlain(?string $passwordPlain): self
    {
        $this->passwordPlain = $passwordPlain;

        return $this;
    }

    public function getSuperadmin(): ?string
    {
        return $this->superadmin;
    }

    public function setSuperadmin(?string $superadmin): self
    {
        $this->superadmin = $superadmin;

        return $this;
    }

    public function getShopName(): ?string
    {
        return $this->shopName;
    }

    public function setShopName(?string $shopName): self
    {
        $this->shopName = $shopName;

        return $this;
    }

    public function getRememberToken(): ?string
    {
        return $this->rememberToken;
    }

    public function setRememberToken(?string $rememberToken): self
    {
        $this->rememberToken = $rememberToken;

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

    public function getCardBrand(): ?string
    {
        return $this->cardBrand;
    }

    public function setCardBrand(?string $cardBrand): self
    {
        $this->cardBrand = $cardBrand;

        return $this;
    }

    public function getCardLastFour(): ?string
    {
        return $this->cardLastFour;
    }

    public function setCardLastFour(?string $cardLastFour): self
    {
        $this->cardLastFour = $cardLastFour;

        return $this;
    }

    public function getTrialEndsAt(): ?string
    {
        return $this->trialEndsAt;
    }

    public function setTrialEndsAt(?string $trialEndsAt): self
    {
        $this->trialEndsAt = $trialEndsAt;

        return $this;
    }

    public function getShopDomain(): ?string
    {
        return $this->shopDomain;
    }

    public function setShopDomain(?string $shopDomain): self
    {
        $this->shopDomain = $shopDomain;

        return $this;
    }

    public function getIsEnabled(): ?string
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?string $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    public function getBillingPlan(): ?string
    {
        return $this->billingPlan;
    }

    public function setBillingPlan(?string $billingPlan): self
    {
        $this->billingPlan = $billingPlan;

        return $this;
    }

    public function getTrialStartsAt(): ?string
    {
        return $this->trialStartsAt;
    }

    public function setTrialStartsAt(?string $trialStartsAt): self
    {
        $this->trialStartsAt = $trialStartsAt;

        return $this;
    }
}
