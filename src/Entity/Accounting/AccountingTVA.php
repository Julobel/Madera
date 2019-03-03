<?php

namespace App\Entity\Accounting;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class AccountingTVA
 * @package App\Entity\Accounting
 * @ORM\Entity
 * @ORM\Table(name="ACCOUNTING_tva")
 * @ApiResource()
 */
class AccountingTVA
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int AccountingTVA Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var float AccountingTVA Value
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $value;

    /**
     * @var string AccountingTVA Label
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $label;

    /**
     * @var boolean AccountingTVA applicable
     *
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $applicable;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AccountingTVA
     */
    public function setId(int $id): AccountingTVA
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return float
     */
    public function getValue(): float {
        return $this->value;
    }

    /**
     * @param float $value
     * @return AccountingTVA
     */
    public function setValue(float $value): AccountingTVA {
        $this->value = $value;
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
     * @return AccountingTVA
     */
    public function setLabel(string $label): AccountingTVA
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Return wehther the rate is actually Applicable.
     * Useful when creating a new Quote
     * @return bool
     */
    public function isApplicable(): bool
    {
        return $this->applicable;
    }

    /**
     * @param bool $applicable
     * @return AccountingTVA
     */
    public function setApplicable(bool $applicable): AccountingTVA
    {
        $this->applicable = $applicable;
        return $this;
    }

}