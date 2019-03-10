<?php

namespace App\Entity\Module;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ModuleWoodenFrameworkType
 * @package App\Entity\Module
 * @ORM\Entity
 * @ORM\Table(name="MODULE_wooden_framework_type")
 * @ApiResource()
 */
class ModuleWoodenFrameworkType
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int WoodenFrameworkType Id
     * @Groups({"get-module", "post-module"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string WoodenFrameworkType Label
     * @Groups({"get-module", "post-module"})
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
     * @return ModuleWoodenFrameworkType
     */
    public function setId(int $id): ModuleWoodenFrameworkType
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
     * @return ModuleWoodenFrameworkType
     */
    public function setLabel(string $label): ModuleWoodenFrameworkType
    {
        $this->label = $label;
        return $this;
    }

}