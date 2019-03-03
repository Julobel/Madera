<?php

namespace App\Entity\Accounting;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class AccountingMargin
 * @package App\Entity\Accounting
 * @ORM\Entity
 * @ORM\Table(name="ACCOUNTING_margin")
 * @ApiResource()
 */
class AccountingMargin
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int AccountingMargin Id
     * @Groups({"get-accounting-value-rate", "post-accounting-value-rate"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string AccountingMargin Label
     * @Groups({"get-accounting-value-rate", "post-accounting-value-rate"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $label;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AccountingMargin
     */
    public function setId(int $id): AccountingMargin
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return AccountingMargin
     */
    public function setLabel(string $label): AccountingMargin
    {
        $this->label = $label;
        return $this;
    }

}