<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Module;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

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
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the unit
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var float Component quantity
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $componentQuantity;

    /**
     * @var boolean
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

}