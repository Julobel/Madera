<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Accounting;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class AccountingValueRate
 * @package App\Entity\Accounting
 * @ORM\Entity
 * @ORM\Table(name="ACCOUNTING_value_rate")
 * @ApiResource()
 */
class AccountingValueRate
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int AccountingValueRate Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var float AccountingValueRate Value
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $value;

    /**
     * @var \DateTime AccountingValueRate start date
     *
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime AccountingValueRate end date
     *
     * @ORM\Column(type="datetime")
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
    public function getEndDate(): \DateTime
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