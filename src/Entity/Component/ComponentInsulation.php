<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Component;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ComponentInsulation
 * @package App\Entity\Component
 * @ORM\Entity
 * @ORM\Table(name="COMPONENT_insulation")
 * @ApiResource()
 */
class ComponentInsulation
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int ComponentInsulation Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string ComponentInsulation Label
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
     * @return ComponentInteriorFinish
     */
    public function setId(int $id): ComponentInteriorFinish
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
     * @return ComponentInteriorFinish
     */
    public function setLabel(string $label): ComponentInteriorFinish
    {
        $this->label = $label;
        return $this;
    }

}