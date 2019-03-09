<?php

namespace App\Entity\Range;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Component\ComponentCovering;
use App\Entity\Component\ComponentExteriorFinish;
use App\Entity\Component\ComponentInsulation;
use App\Entity\Component\ComponentInteriorFinish;
use App\Entity\Component\ComponentWindowFrame;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Range
 * @package App\Entity\Range
 * @ORM\Entity
 * @ORM\Table(name="RANGE_range")
 * @ApiResource()
 */
class Range
{

    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @var ComponentCovering $componentCovering
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Component\ComponentCovering")
     * @ORM\JoinColumn(name="component_covering_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $componentCovering;

    /**
     * @var ComponentExteriorFinish $componentExteriorFinish
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Component\ComponentExteriorFinish")
     * @ORM\JoinColumn(name="component_exterior_finish_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $componentExteriorFinish;


    /**
     * @var ComponentInteriorFinish $componentInteriorFinish
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Component\ComponentInteriorFinish")
     * @ORM\JoinColumn(name="component_interior_finish_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $componentInteriorFinish;

    /**
     * @var ComponentInsulation $componentInsulation
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Component\ComponentInsulation")
     * @ORM\JoinColumn(name="component_insulation_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $componentInsulation;

    /**
     * @var ComponentWindowFrame $componentWindowFrame
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Component\ComponentWindowFrame")
     * @ORM\JoinColumn(name="component_window_frame_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $componentWindowFrame;

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Range Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Range Label
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
     * @return Range
     */
    public function setId(int $id): Range
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
     * @return Range
     */
    public function setLabel(string $label): Range
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return ComponentCovering
     */
    public function getComponentCovering(): ComponentCovering {
        return $this->componentCovering;
    }

    /**
     * @param ComponentCovering $componentCovering
     * @return Range
     */
    public function setComponentCovering(ComponentCovering $componentCovering): Range {
        $this->componentCovering = $componentCovering;
        return $this;
    }

    /**
     * @return ComponentExteriorFinish
     */
    public function getComponentExteriorFinish(): ComponentExteriorFinish {
        return $this->componentExteriorFinish;
    }

    /**
     * @param ComponentExteriorFinish $componentExteriorFinish
     * @return Range
     */
    public function setComponentExteriorFinish(ComponentExteriorFinish $componentExteriorFinish): Range{
        $this->componentExteriorFinish = $componentExteriorFinish;
        return $this;
    }

    /**
     * @return ComponentInteriorFinish
     */
    public function getComponentInteriorFinish(): ComponentInteriorFinish {
        return $this->componentInteriorFinish;
    }

    /**
     * @param ComponentInteriorFinish $componentInteriorFinish
     * @return Range
     */
    public function setComponentInteriorFinish(ComponentInteriorFinish $componentInteriorFinish): Range{
        $this->componentInteriorFinish = $componentInteriorFinish;
        return $this;
    }

    /**
     * @return ComponentInsulation
     */
    public function getComponentInsulation(): ComponentInsulation {
        return $this->componentInsulation;
    }

    /**
     * @param ComponentInsulation $componentInsulation
     * @return Range
     */
    public function setComponentInsulation(ComponentInsulation $componentInsulation): Range{
        $this->componentInsulation = $componentInsulation;
        return $this;
    }

    /**
     * @return ComponentWindowFrame
     */
    public function getComponentWindowFrame(): ComponentWindowFrame {
        return $this->componentWindowFrame;
    }

    /**
     * @param ComponentWindowFrame $componentWindowFrame
     * @return Range
     */
    public function setComponentWindowFrame(ComponentWindowFrame $componentWindowFrame): Range {
        $this->componentWindowFrame = $componentWindowFrame;
        return $this;
    }

}