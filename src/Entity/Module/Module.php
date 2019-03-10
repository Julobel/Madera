<?php

namespace App\Entity\Module;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Quotes\QuotesLine;
use App\Entity\Range\Range;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Class Module
 * @package App\Entity\Module
 * @ORM\Entity
 * @ORM\Table(name="MODULE_module")
 * @ApiResource(
 *     collectionOperations={
 *          "GET"={
 *             "normalization_context"={"groups"={"get-module"}}
 *           },
 *          "POST"={
 *             "denormalization_context"={"groups"={"post-module"}}
 *          }
 *     },
 * )
 */
class Module
{
    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     *
     * @var Collection $quotesLines
     *
     * @ORM\OneToMany(targetEntity="\App\Entity\Quotes\QuotesLine", mappedBy="module", cascade={"persist"}))
     */
    private $quotesLines;

    /**
     * @var Range $moduleRange
     * @Groups({"get-module", "post-module"})
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Range\Range")
     * @ORM\JoinColumn(name="module_range_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $moduleRange;

    /**
     * @var ModuleNature $moduleNature
     * @Groups({"get-module", "post-module"})
     *
     * @ORM\ManyToOne(targetEntity="ModuleNature")
     * @ORM\JoinColumn(name="module_nature_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $moduleNature;


    /**
     * @var ModuleWoodenFrameworkType $moduleWoodenFramework
     * @Groups({"get-module", "post-module"})
     *
     * @ORM\ManyToOne(targetEntity="ModuleWoodenFrameworkType")
     * @ORM\JoinColumn(name="module_wooden_framework_id", referencedColumnName="id", onDelete="RESTRICT", nullable=true))
     */
    private $moduleWoodenFramework;

    /**
     * @var Collection $structureComponents
     * @Groups({"get-module", "post-module"})
     *
     * @ORM\OneToMany(targetEntity="ModuleStructure", mappedBy="module", cascade={"persist"})
     */
    private $structureComponents;

    /**
     * @return Collection
     */
    public function getStructureComponents(): Collection {
        return $this->structureComponents;
    }

    /**
     * @param ModuleStructure $moduleStructure
     * @return Module
     */
    public function addStructureComponent(ModuleStructure $moduleStructure) : Module{
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->structureComponents->contains($moduleStructure)) {
            $this->structureComponents->add($moduleStructure);
            $moduleStructure->setModule($this);
        }
        return $this;
    }

    public function __construct() {
        $this->structureComponents = new ArrayCollection();
        $this->quotesLines = new ArrayCollection();
    }
    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the module
     * @Groups({"get-module", "post-module"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Label of the module
     * @Groups({"get-module", "post-module"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $label;

    /**
     * @var float Discount of the module
     * @Groups({"get-module", "post-module"})
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $discount;

    /**
     * @var float Height of the module
     * @Groups({"get-module", "post-module"})
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $height;

    /**
     * @var float Length of the module
     * @Groups({"get-module", "post-module"})
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $length;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Module
     */
    public function setId(int $id): Module
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
     * @return Module
     */
    public function setLabel(string $label): Module
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     * @return Module
     */
    public function setDiscount(float $discount): Module
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     * @return Module
     */
    public function setHeight(float $height): Module
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @param float $length
     * @return Module
     */
    public function setLength(float $length): Module
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return ModuleNature
     */
    public function getModuleNature(): ModuleNature {
        return $this->moduleNature;
    }

    /**
     * @param ModuleNature $moduleNature
     * @return Module
     */
    public function setModuleNature(ModuleNature $moduleNature): Module {
        $this->moduleNature = $moduleNature;
        return $this;
    }

    /**
     * @return ModuleWoodenFrameworkType
     */
    public function getModuleWoodenFramework(): ?ModuleWoodenFrameworkType {
        return $this->moduleWoodenFramework;
    }

    /**
     * @param ModuleWoodenFrameworkType $moduleWoodenFramework
     * @return Module
     */
    public function setModuleWoodenFramework(ModuleWoodenFrameworkType $moduleWoodenFramework): Module {
        $this->moduleWoodenFramework = $moduleWoodenFramework;
        return $this;
    }

    /**
     * @return Range
     */
    public function getModuleRange(): Range {
        return $this->moduleRange;
    }

    /**
     * @param Range $moduleRange
     * @return Module
     */
    public function setModuleRange(Range $moduleRange): Module {
        $this->moduleRange = $moduleRange;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getQuotesLines(): Collection
    {
        return $this->quotesLines;
    }

    /**
     * @param QuotesLine $quoteLine
     * @return Module
     */
    public function addQuoteLine(QuotesLine $quoteLine) : Module{
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->quotesLines->contains($quoteLine)) {
            $this->quotesLines->add($quoteLine);
            $quoteLine->setModule($this);
        }
        return $this;
    }

}