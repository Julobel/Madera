<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Component;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ComponentUnit
 * @package App\Entity\Component
 * @ORM\Entity
 * @ORM\Table(name="COMPONENT_unit")
 * @ApiResource()
 */
class ComponentUnit
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int ComponentUnit Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string ComponentUnit Label
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
     * @return ComponentUnit
     */
    public function setId(int $id): ComponentUnit
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
     * @return ComponentUnit
     */
    public function setLabel(string $label): ComponentUnit
    {
        $this->label = $label;
        return $this;
    }

}