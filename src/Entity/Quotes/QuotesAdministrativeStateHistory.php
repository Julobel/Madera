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
 * @ORM\Table(name="QUOTES_administrative_state_history")
 * @ApiResource(
 *     collectionOperations={
 *          "GET"={
 *             "normalization_context"={"groups"={"get-quotes-administrative-state-history"}}
 *           },
 *          "POST"={
 *             "denormalization_context"={"groups"={"post-quotes-administrative-state-history"}}
 *          }
 *     }
 * )
 */
class QuotesAdministrativeStateHistory
{
    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @var QuotesAdministrativeState $quotesAdministrativeState
     * @Groups({"get-quotes-administrative-state-history", "post-quotes-administrative-state-history"})
     *
     * @ORM\ManyToOne(targetEntity="QuotesAdministrativeState", inversedBy="quotesAdministrativeStateHistory", cascade={"persist"}))
     * @ORM\JoinColumn(name="quotes_administrative_state_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $quotesAdministrativeState;

    /**
     * @var Quotes $quote
     *
     * @ORM\ManyToOne(targetEntity="Quotes", inversedBy="quotesAdministrativeStateHistory", cascade={"persist"}))
     * @ORM\JoinColumn(name="quotes_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $quote;

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the administrative state history.
     * @Groups({"get-quotes-administrative-state-history", "post-quotes-administrative-state-history"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \DateTime Date of the administrative state history.
     * @Groups({"get-quotes-administrative-state-history", "post-quotes-administrative-state-history"})
     *
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $dateApplication;

    /**
     * @return QuotesAdministrativeState
     */
    public function getQuotesAdministrativeState() : QuotesAdministrativeState
    {
        return $this->quotesAdministrativeState;
    }

    /**
     * @param QuotesAdministrativeState $quotesAdministrativeState
     * @return QuotesAdministrativeStateHistory
     */
    public function setQuotesAdministrativeState(QuotesAdministrativeState $quotesAdministrativeState): QuotesAdministrativeStateHistory
    {
        $this->quotesAdministrativeState = $quotesAdministrativeState;
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
     * @return QuotesAdministrativeStateHistory
     */
    public function setId(int $id): QuotesAdministrativeStateHistory
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateApplication(): \DateTime
    {
        return $this->dateApplication;
    }

    /**
     * @param \DateTime $dateApplication
     * @return QuotesAdministrativeStateHistory
     */
    public function setDateApplication(\DateTime $dateApplication): QuotesAdministrativeStateHistory
    {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * @return Quotes
     */
    public function getQuote(): Quotes {
        return $this->quote;
    }

    /**
     * @param Quotes $quote
     * @return QuotesAdministrativeStateHistory
     */
    public function setQuote(Quotes $quote): QuotesAdministrativeStateHistory {
        $this->quote = $quote;
        return $this;
    }

}