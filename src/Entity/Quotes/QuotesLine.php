<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Quotes;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class QuotesAdministrativeState
 * @package App\Entity\Quotes
 * @ORM\Entity
 * @ORM\Table(name="QUOTES_quotes_line")
 * @ApiResource()
 */
class QuotesLine
{
    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @Groups({"get-quotes", "post-quotes"})
     *
     * @ORM\ManyToOne(targetEntity="Quotes")
     * @ORM\JoinColumn(name="quotes_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $quotes;


    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the quotes line.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Name of the module
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $moduleName;

    /**
     * @var float
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $moduleQuantity;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return QuotesLine
     */
    public function setId(int $id): QuotesLine
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getModuleName(): string
    {
        return $this->moduleName;
    }

    /**
     * @param string $moduleName
     * @return QuotesLine
     */
    public function setModuleName(string $moduleName): QuotesLine
    {
        $this->moduleName = $moduleName;
        return $this;
    }

    /**
     * @return float
     */
    public function getModuleQuantity(): float
    {
        return $this->moduleQuantity;
    }

    /**
     * @param float $moduleQuantity
     * @return QuotesLine
     */
    public function setModuleQuantity(float $moduleQuantity): QuotesLine
    {
        $this->moduleQuantity = $moduleQuantity;
        return $this;
    }

}