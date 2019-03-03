<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Component;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

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
    // RELATIONS
    //////////////////////////////////

    /**
     *
     * @ORM\ManyToOne(targetEntity="Component", inversedBy="componentPrices", cascade={"persist"})
     * @ORM\JoinColumn(name="component_component_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $component;

    /**
     * @return Component
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * @param Component $component
     * @return ComponentPrice
     */
    public function setComponent($component): ComponentPrice
    {
        $this->component = $component;
        return $this;
    }
    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int ComponentPrice Id
     * @Groups({"get-component-component", "post-component-component"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var float ComponentPrice Value
     * @Groups({"get-component-component", "post-component-component"})
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $value;

    /**
     * @var \DateTime ComponentPrice start date
     * @Groups({"get-component-component", "post-component-component"})
     *
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @var mixed ComponentPrice end date
     * @Groups({"get-component-component", "post-component-component"})
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
    public function getEndDate(): ?\DateTime
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