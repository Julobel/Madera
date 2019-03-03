<?php

namespace App\Entity\Accounting;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class AccountingValueRate
 * @package App\Entity\Accounting
 * @ORM\Entity
 * @ORM\Table(name="ACCOUNTING_value_rate")
 * @ApiResource(
 *     collectionOperations={
 *          "GET"={
 *             "normalization_context"={"groups"={"get-accounting-value-rate"}}
 *           },
 *          "POST"={
 *             "denormalization_context"={"groups"={"post-accounting-value-rate"}}
 *          }
 *     },
 * )
 */
class AccountingValueRate
{
    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @Groups({"get-accounting-value-rate", "post-accounting-value-rate"})
     *
     * @ORM\ManyToOne(targetEntity="AccountingMargin")
     * @ORM\JoinColumn(name="accounting_margin_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $margin;

    /**
     * @return AccountingMargin
     */
    public function getMargin() {
        return $this->margin;
    }

    /**
     * @param AccountingMargin $margin
     * @return AccountingValueRate
     */
    public function setMargin(AccountingMargin $margin): AccountingValueRate{
        $this->margin = $margin;
        return $this;
    }

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int AccountingValueRate Id
     * @Groups({"get-accounting-value-rate", "post-accounting-value-rate"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var float AccountingValueRate Value
     * @Groups({"get-accounting-value-rate", "post-accounting-value-rate"})
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $value;

    /**
     * @var \DateTime AccountingValueRate start date
     * @Groups({"get-accounting-value-rate", "post-accounting-value-rate"})
     *
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime AccountingValueRate end date
     * @Groups({"get-accounting-value-rate", "post-accounting-value-rate"})
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AccountingValueRate
     */
    public function setId(int $id): AccountingValueRate
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return AccountingValueRate
     */
    public function setValue(float $value): AccountingValueRate
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return AccountingValueRate
     */
    public function setStartDate(\DateTime $startDate): AccountingValueRate
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return AccountingValueRate
     */
    public function setEndDate(\DateTime $endDate): AccountingValueRate
    {
        $this->endDate = $endDate;
        return $this;
    }

}