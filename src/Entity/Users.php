<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
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


}
