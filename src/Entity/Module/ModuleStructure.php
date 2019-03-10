<?php

namespace App\Entity\Module;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Component\Component;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ModuleStructure
 * @package App\Entity\Module
 * @ORM\Entity
 * @ORM\Table(name="MODULE_structure")
 * @ApiResource()
 */
class ModuleStructure
{
    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @var Module $module
     *
     * @ORM\ManyToOne(targetEntity="Module", inversedBy="structureComponents")
     * @ORM\JoinColumn(name="module_id", referencedColumnName="id", nullable=FALSE)
     */
    protected $module;

    /**
     * @var Component $component
     * @Groups({"get-module"})
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Component\Component", inversedBy="structureOf")
     * @ORM\JoinColumn(name="component_id", referencedColumnName="id", nullable=FALSE)
     */
    protected $component;

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the unit
     * @Groups({"get-module"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var float Component quantity
     * @Groups({"get-module"})
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $componentQuantity;

    /**
     * @var boolean
     * @Groups({"get-module"})
     *
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $isProportional;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ModuleStructure
     */
    public function setId(int $id): ModuleStructure
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return float
     */
    public function getComponentQuantity(): float
    {
        return $this->componentQuantity;
    }

    /**
     * @param float $componentQuantity
     * @return ModuleStructure
     */
    public function setComponentQuantity(float $componentQuantity): ModuleStructure
    {
        $this->componentQuantity = $componentQuantity;
        return $this;
    }

    /**
     * @return bool
     */
    public function isProportional(): bool
    {
        return $this->isProportional;
    }

    /**
     * @param bool $isProportional
     * @return ModuleStructure
     */
    public function setIsProportional(bool $isProportional): ModuleStructure
    {
        $this->isProportional = $isProportional;
        return $this;
    }

    /**
     * @return Module
     */
    public function getModule() {
        return $this->module;
    }

    /**
     * @param Module $module
     * @return ModuleStructure
     */
    public function setModule(Module $module): ModuleStructure {
        $this->module = $module;
        return $this;
    }

    /**
     * @return Component
     */
    public function getComponent() {
        return $this->component;
    }

    /**
     * @param Component $component
     * @return ModuleStructure
     */
    public function setComponent(Component $component): ModuleStructure{
        $this->component = $component;
        return $this;
    }

}