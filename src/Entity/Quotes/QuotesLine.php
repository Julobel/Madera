<?php

namespace App\Entity\Quotes;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Module\Module;
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
     * @var Quotes $quote
     * @Groups({"get-quotes", "post-quotes"})
     *
     * @ORM\ManyToOne(targetEntity="Quotes", inversedBy="quotesLines"))
     * @ORM\JoinColumn(name="quotes_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $quote;

    /**
     * @var Module $module
     * @Groups({"get-quotes", "post-quotes"})
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Module\Module", inversedBy="quotesLines"))
     * @ORM\JoinColumn(name="module_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $module;

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

    /**
     * @return Quotes
     */
    public function getQuote() : Quotes
    {
        return $this->quote;
    }

    /**
     * @param Quotes $quote
     * @return QuotesLine
     */
    public function setQuote(Quotes $quote): QuotesLine
    {
        $this->quote = $quote;
        return $this;
    }

    /**
     * @return Module
     */
    public function getModule(): Module {
        return $this->module;
    }

    /**
     * @param Module $module
     * @return QuotesLine
     */
    public function setModule(Module $module): QuotesLine {
        $this->module = $module;
        return $this;
    }



}