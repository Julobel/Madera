<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Margin;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Margin
 * @package App\Entity\Margin
 * @ORM\Entity
 * @ORM\Table(name="MARGIN_margin")
 * @ApiResource()
 */
class Margin
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Margin Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Margin Label
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
     * @return Margin
     */
    public function setId(int $id): Margin
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
     * @return Margin
     */
    public function setLabel(string $label): Margin
    {
        $this->label = $label;
        return $this;
    }

}