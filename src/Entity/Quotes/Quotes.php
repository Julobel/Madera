<?php

namespace App\Entity\Quotes;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Project\Project;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Quotes
 * @package App\Entity\Quotes
 * @ORM\Entity
 * @ORM\Table(name="QUOTES_quotes")
 * @ApiResource(
 *     collectionOperations={
 *          "GET"={
 *             "normalization_context"={"groups"={"get-quotes"}}
 *           },
 *          "POST"={
 *             "denormalization_context"={"groups"={"post-quotes"}}
 *          }
 *     },
 *)
 */
class Quotes
{
    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @var Collection $quotesLines
     * @Groups({"get-quotes", "post-quotes"})
     *
     * @ORM\OneToMany(fetch="EAGER", targetEntity="QuotesLine", mappedBy="quote", cascade={"persist"}))
     */
     private $quotesLines;

    /**
     * @Groups({"get-quotes", "post-quotes"})
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Project\Project")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $project;

    /**
     * @Groups({"get-quotes", "post-quotes"})
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Actor\ActorCommercial")
     * @ORM\JoinColumn(name="actor_commercial_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $actorCommercial;

    /**
     * @Groups({"get-quotes", "post-quotes"})
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Accounting\AccountingTVA")
     * @ORM\JoinColumn(name="accounting_tva_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $accountingTVA;

    /**
     * @var Collection $quotesAdministrativeStateHistory
     *
     * @ORM\OneToMany(targetEntity="QuotesAdministrativeStateHistory", mappedBy="quote", cascade={"persist"}))
     */
    private $quotesAdministrativeStateHistory;

    /**
     * @return Collection
     */
    public function getQuotesAdministrativeStateHistory(): Collection {
        return $this->quotesAdministrativeStateHistory;
    }

    /**
     * @param QuotesAdministrativeStateHistory $quotesAdministrativeStateHistory
     * @return Quotes
     */
    public function addAdministrativeStateHistory(QuotesAdministrativeStateHistory $quotesAdministrativeStateHistory) : Quotes{
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->quotesAdministrativeStateHistory->contains($quotesAdministrativeStateHistory)) {
            $this->quotesAdministrativeStateHistory->add($quotesAdministrativeStateHistory);
            $quotesAdministrativeStateHistory->setQuote($this);
        }
        return $this;
    }
    /**
     * @var Collection $quotesProgressStatusHistory
     *
     * @ORM\OneToMany(targetEntity="QuotesProgressStatusHistory", mappedBy="quote", cascade={"persist"}))
     */
    private $quotesProgressStatusHistory;

    /**
     * @return Collection
     */
    public function getQuotesProgressStatusHistory(): Collection {
        return $this->quotesProgressStatusHistory;
    }

    /**
     * @param QuotesProgressStatusHistory $quotesProgressStatusHistory
     * @return Quotes
     */
    public function addProgressStatusHistory(QuotesProgressStatusHistory $quotesProgressStatusHistory) : Quotes{
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->quotesProgressStatusHistory->contains($quotesProgressStatusHistory)) {
            $this->quotesProgressStatusHistory->add($quotesProgressStatusHistory);
            $quotesProgressStatusHistory->setQuote($this);
        }
        return $this;
    }

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the quotes.
     * @Groups({"get-quotes", "post-quotes"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \DateTime Creation date of the quotes
     * @Groups({"get-quotes", "post-quotes"})
     *
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var float Discount of the quotes
     * @Groups({"get-quotes", "post-quotes"})
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $discount;

    /**
     * @var float Selling price of the quotes
     * @Groups({"get-quotes", "post-quotes"})
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $sellingPrice;

    /**
     * Quotes constructor.
     */
    public function __construct()
    {
        $this->quotesLines = new ArrayCollection();
        $this->quotesAdministrativeStateHistory = new ArrayCollection();
        $this->quotesProgressStatusHistory = new ArrayCollection();
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
     * @return Quotes
     */
    public function setId(int $id): Quotes
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Quotes
     */
    public function setDate(\DateTime $date): Quotes
    {
        $this->date = $date;
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
     * @return Quotes
     */
    public function setDiscount(float $discount): Quotes
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return float
     */
    public function getSellingPrice(): ?float
    {
        return $this->sellingPrice;
    }

    /**
     * @param float $sellingPrice
     * @return Quotes
     */
    public function setSellingPrice(float $sellingPrice): Quotes
    {
        $this->sellingPrice = $sellingPrice;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getQuotesLines(): Collection
    {
        return $this->quotesLines;
    }

    /**
     * @param QuotesLine $quoteLine
     * @return Quotes
     */
    public function addQuoteLine(QuotesLine $quoteLine) : Quotes{
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->quotesLines->contains($quoteLine)) {
            $this->quotesLines->add($quoteLine);
            $quoteLine->setQuote($this);
        }
        return $this;
    }


    /**
     * @return Project
     */
    public function getProject(): Project
    {
        return $this->project;
    }

    /**
     * @param mixed $project
     * @return Quotes
     */
    public function setProject($project): Quotes
    {
        $this->project = $project;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActorCommercial()
    {
        return $this->actorCommercial;
    }

    /**
     * @param mixed $actorCommercial
     * @return Quotes
     */
    public function setActorCommercial($actorCommercial): Quotes
    {
        $this->actorCommercial = $actorCommercial;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountingTVA()
    {
        return $this->accountingTVA;
    }

    /**
     * @param mixed $accountingTVA
     * @return Quotes
     */
    public function setAccountingTVA($accountingTVA): Quotes
    {
        $this->accountingTVA = $accountingTVA;
        return $this;
    }



}