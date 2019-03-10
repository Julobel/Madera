<?php

namespace App\Entity\Module;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ModuleUnit
 * @package App\Entity\Module
 * @ORM\Entity
 * @ORM\Table(name="MODULE_unit")
 * @ApiResource()
 */
class ModuleUnit
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the unit
     * @Groups({"get-module", "get-module-nature"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Label of the unit
     * @Groups({"get-module", "get-module-nature"})
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
     * @return ModuleUnit
     */
    public function setId(int $id): ModuleUnit
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
     * @return ModuleUnit
     */
    public function setLabel(string $label): ModuleUnit
    {
        $this->label = $label;
        return $this;
    }

}