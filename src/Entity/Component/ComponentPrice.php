<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Component;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ComponentPrice
 * @package App\Entity\Component
 * @ORM\Entity
 * @ORM\Table(name="COMPONENT_price")
 * @ApiResource()
 */
class ComponentPrice
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int ComponentPrice Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var float ComponentPrice Value
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $value;

    /**
     * @var \DateTime ComponentPrice start date
     *
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime ComponentPrice end date
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
     * @return ComponentPrice
     */
    public function setId(int $id): ComponentPrice
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
     * @return ComponentPrice
     */
    public function setValue(float $value): ComponentPrice
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
     * @return ComponentPrice
     */
    public function setStartDate(\DateTime $startDate): ComponentPrice
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
     * @return ComponentPrice
     */
    public function setEndDate(\DateTime $endDate): ComponentPrice
    {
        $this->endDate = $endDate;
        return $this;
    }

}