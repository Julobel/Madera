<?php

namespace App\Entity\Component;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;
use Doctrine\ORM\Mapping\InheritanceType;

/**
 *
 * Class ComponentQuality
 * @package App\Entity\Component
 * @ORM\Entity
 *
 * @ORM\Table(name="COMPONENT_quality")
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn(name="discr", type="string")
 * @DiscriminatorMap({  "covering" = "ComponentCovering",
 *                      "exterior" = "ComponentExteriorFinish",
 *                      "insulation" = "ComponentInsulation",
 *                      "interior" = "ComponentInteriorFinish",
 *                      "window" = "ComponentWindowFrame"})
 *
 * @ApiResource()
 */
abstract class ComponentQuality
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     *
     * @var int ComponentQuality Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string ComponentQuality Label
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
     * @return ComponentQuality
     */
    public function setId(int $id): ComponentQuality
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
     * @return ComponentQuality
     */
    public function setLabel(string $label): ComponentQuality
    {
        $this->label = $label;
        return $this;
    }

}