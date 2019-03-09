<?php

namespace App\Entity\Module;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ModuleNature
 * @package App\Entity\Module
 * @ORM\Entity
 * @ORM\Table(name="MODULE_nature")
 * @ApiResource(
 *     collectionOperations={
 *          "GET"={
 *             "normalization_context"={"groups"={"get-module-nature"}}
 *           },
 *          "POST"={
 *             "denormalization_context"={"groups"={"post-module-nature"}}
 *          }
 *     },
 * )
 */
class ModuleNature
{

    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @var ModuleUnit $moduleUnit
     * @Groups({"get-module", "get-module-nature", "post-module-nature"})
     *
     * @ORM\ManyToOne(targetEntity="ModuleUnit")
     * @ORM\JoinColumn(name="module_unit_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $moduleUnit;

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the module nature
     * @Groups({"get-module", "get-module-nature", "post-module-nature"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Label of the module nature
     * @Groups({"get-module", "get-module-nature", "post-module-nature"})
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
     * @return ModuleNature
     */
    public function setId(int $id): ModuleNature
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
     * @return ModuleNature
     */
    public function setLabel(string $label): ModuleNature
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return ModuleUnit
     */
    public function getModuleUnit() {
        return $this->moduleUnit;
    }

    /**
     * @param ModuleUnit $moduleUnit
     * @return ModuleNature
     */
    public function setModuleUnit(ModuleUnit $moduleUnit): ModuleNature{
        $this->moduleUnit = $moduleUnit;
        return $this;
    }

}