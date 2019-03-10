<?php

namespace App\Entity\Component;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Module\ModuleStructure;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Component
 * @package App\Entity\Component
 * @ORM\Entity
 * @ORM\Table(name="COMPONENT_component")
 * @ApiResource(
 *     collectionOperations={
 *          "GET"={
 *             "normalization_context"={"groups"={"get-component-component"}}
 *           },
 *          "POST"={
 *             "denormalization_context"={"groups"={"post-component-component"}}
 *          }
 *     },
 * )
 */
class Component
{
    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @var ComponentNature $componentNature
     * @Groups({"get-component-component", "post-component-component"})
     *
     * @ORM\ManyToOne(targetEntity="ComponentNature")
     * @ORM\JoinColumn(name="component_nature_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $componentNature;

    /**
     * @var ComponentQuality $componentQuality
     * @Groups({"get-component-component", "post-component-component"})
     *
     * @ORM\ManyToOne(targetEntity="ComponentQuality")
     * @ORM\JoinColumn(name="component_quality_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $componentQuality;

    /**
     * @var Collection $componentPrices
     * @Groups({"get-component-component", "post-component-component", "get-module"})
     *
     * @ORM\OneToMany(targetEntity="ComponentPrice", mappedBy="component", cascade={"persist"})
     */
    private $componentPrices;


    /**
     * @var Collection $structureOf
     *
     * @ORM\OneToMany(targetEntity="\App\Entity\Module\ModuleStructure", mappedBy="component", cascade={"persist"})
     */
    private $structureOf;

    /**
     * @return Collection
     */
    public function getComponentPrices(): Collection {
        return $this->componentPrices;
    }

    /**
     * @param ComponentPrice $price
     * @return Component
     */
    public function addPrice(ComponentPrice $price) : Component {
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->componentPrices->contains($price)) {
            $this->componentPrices->add($price);
            $price->setComponent($this);
        }
        return $this;
    }

    /**
     * @return Collection
     */
    public function getStructureOf(): Collection {
        return $this->structureOf;
    }


    /**
     * @param ModuleStructure $moduleStructure
     * @return Component
     */
    public function addStructureOf(ModuleStructure $moduleStructure) : Component{
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->structureOf->contains($moduleStructure)) {
            $this->structureOf->add($moduleStructure);
            $moduleStructure->setComponent($this);
        }
        return $this;
    }

    public function __construct() {
        $this->componentPrices = new ArrayCollection();
        $this->structureOf = new ArrayCollection();
    }

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Component Id
     * @Groups({"get-component-component", "post-component-component"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Component Label
     * @Groups({"get-component-component", "post-component-component"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $label;

    /**
     * @var integer Component Section
     * @Groups({"get-component-component", "post-component-component"})
     *
     * @ORM\Column(type="integer")
     */
    private $section;

    /**
     * @var integer Component Thickness
     * @Groups({"get-component-component", "post-component-component"})
     *
     * @ORM\Column(type="integer")
     */
    private $thickness;

    /**
     * @var integer Component Length
     * @Groups({"get-component-component", "post-component-component"})
     *
     * @ORM\Column(type="integer")
     */
    private $length;

    /**
     * @var integer Component Width
     * @Groups({"get-component-component", "post-component-component"})
     *
     * @ORM\Column(type="integer")
     */
    private $width;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Component
     */
    public function setId(int $id): Component
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
     * @return Component
     */
    public function setLabel(string $label): Component
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return int
     */
    public function getSection(): int
    {
        return $this->section;
    }

    /**
     * @param int $section
     * @return Component
     */
    public function setSection(int $section): Component
    {
        $this->section = $section;
        return $this;
    }

    /**
     * @return int
     */
    public function getThickness(): int
    {
        return $this->thickness;
    }

    /**
     * @param int $thickness
     * @return Component
     */
    public function setThickness(int $thickness): Component
    {
        $this->thickness = $thickness;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return Component
     */
    public function setLength(int $length): Component
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Component
     */
    public function setWidth(int $width): Component
    {
        $this->width = $width;
        return $this;
    }
    /**
     * @return ComponentNature
     */
    public function getComponentNature()
    {
        return $this->componentNature;
    }

    /**
     * @param ComponentNature $componentNature
     * @return Component
     */
    public function setComponentNature($componentNature): Component
    {
        $this->componentNature = $componentNature;
        return $this;
    }

    /**
     * @return ComponentQuality
     */
    public function getComponentQuality(): ?ComponentQuality {
        return $this->componentQuality;
    }

    /**
     * @return Component
     * @param ComponentQuality $componentQuality
     */
    public function setComponentQuality(ComponentQuality $componentQuality): Component {
        $this->componentQuality = $componentQuality;
        return $this;
    }



}