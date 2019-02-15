<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Module;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Module
 * @package App\Entity\Module
 * @ORM\Entity
 * @ORM\Table(name="MODULE_module")
 * @ApiResource()
 */
class Module
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the module
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Label of the module
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $label;

    /**
     * @var float Discount of the module
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $discount;

    /**
     * @var integer Height of the module
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $height;

    /**
     * @var integer Length of the module
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
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Module
     */
    public function setHeight(int $height): Module
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return Module
     */
    public function setLength(int $length): Module
    {
        $this->length = $length;
        return $this;
    }

}