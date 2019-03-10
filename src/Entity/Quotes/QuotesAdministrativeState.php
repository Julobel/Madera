<?php

namespace App\Entity\Quotes;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Class QuotesAdministrativeState
 * @package App\Entity\Quotes
 * @ORM\Entity
 * @ORM\Table(name="QUOTES_administrative_state")
 * @ApiResource()
 */
class QuotesAdministrativeState
{

    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @var Collection $quotesAdministrativeStateHistory
     *
     * @ORM\OneToMany(targetEntity="QuotesAdministrativeStateHistory", mappedBy="quotesAdministrativeState", cascade={"persist"}))
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
     * @return QuotesAdministrativeState
     */
    public function addHistory(QuotesAdministrativeStateHistory $quotesAdministrativeStateHistory) : QuotesAdministrativeState{
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->quotesAdministrativeStateHistory->contains($quotesAdministrativeStateHistory)) {
            $this->quotesAdministrativeStateHistory->add($quotesAdministrativeStateHistory);
            $quotesAdministrativeStateHistory->setQuotesAdministrativeState($this);
        }
        return $this;
    }

    public function __construct()
    {
        $this->quotesAdministrativeStateHistory = new ArrayCollection();
    }

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the administrative state.
     * @Groups({"get-quotes-administrative-state-history"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Label of the administrative state.
     * @Groups({"get-quotes-administrative-state-history"})
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
     * @return QuotesAdministrativeState
     */
    public function setId(int $id): QuotesAdministrativeState
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
     * @return QuotesAdministrativeState
     */
    public function setLabel(string $label): QuotesAdministrativeState
    {
        $this->label = $label;
        return $this;
    }

}