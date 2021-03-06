<?php

namespace App\Entity\Component;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ComponentNature
 * @package App\Entity\Component
 * @ORM\Entity
 * @ORM\Table(name="COMPONENT_nature")
 * @ApiResource(
 *     collectionOperations={
 *          "GET"={
 *             "normalization_context"={"groups"={"get-component-nature"}}
 *           },
 *          "POST"={
 *             "denormalization_context"={"groups"={"post-component-nature"}}
 *          }
 *     },
 * )
 */
class ComponentNature
{

    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @Groups({"get-component-component","get-component-nature", "post-component-nature"})
     *
     * @ORM\ManyToOne(targetEntity="ComponentUnit")
     * @ORM\JoinColumn(name="component_unit_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $componentUnit;

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int ComponentNature Id
     * @Groups({"get-component-component","get-component-nature", "post-component-nature"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string ComponentNature Label
     * @Groups({"get-component-component","get-component-nature", "post-component-nature"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $label;

    /**
     * @return ComponentUnit
     */
    public function getComponentUnit()
    {
        return $this->componentUnit;
    }

    /**
     * @param ComponentUnit $componentUnit
     * @return ComponentNature
     */
    public function setComponentUnit(ComponentUnit $componentUnit): ComponentNature
    {
        $this->componentUnit = $componentUnit;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ComponentNature
     */
    public function setId(int $id): ComponentNature
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
     * @return ComponentNature
     */
    public function setLabel(string $label): ComponentNature
    {
        $this->label = $label;
        return $this;
    }

}