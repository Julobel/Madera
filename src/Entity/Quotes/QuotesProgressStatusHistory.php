<?php

namespace App\Entity\Quotes;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class QuotesAdministrativeState
 * @package App\Entity\Quotes
 * @ORM\Entity
 * @ORM\Table(name="QUOTES_progress_status_history")
 * @ApiResource(
 *     collectionOperations={
 *          "GET"={
 *             "normalization_context"={"groups"={"get-quotes-progress-status-history"}}
 *           },
 *          "POST"={
 *             "denormalization_context"={"groups"={"post-quotes-progress-status-history"}}
 *          }
 *     },
 *)
 */
class QuotesProgressStatusHistory
{
    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @var QuotesProgressStatus $quotesProgressStatus
     * @Groups({"get-quotes-progress-status-history", "post-quotes-progress-status-history"})
     *
     * @ORM\ManyToOne(targetEntity="QuotesProgressStatus", inversedBy="quotesProgressStatusHistory", cascade={"persist"}))
     * @ORM\JoinColumn(name="quotes_progress_status_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $quotesProgressStatus;

    /**
     * @var Quotes $quote
     * @Groups({"get-quotes-progress-status-history", "post-quotes-progress-status-history"})
     *
     * @ORM\ManyToOne(targetEntity="Quotes", inversedBy="quotesProgressStatusHistory", cascade={"persist"}))
     * @ORM\JoinColumn(name="quotes_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $quote;

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the progress status history.
     * @Groups({"get-quotes-progress-status-history", "post-quotes-progress-status-history"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \DateTime Date of the progress status history.
     * @Groups({"get-quotes-progress-status-history", "post-component-nature"})
     *
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $dateApplication;

    /**
     * @return QuotesProgressStatus
     */
    public function getQuotesProgressStatus() : QuotesProgressStatus
    {
        return $this->quotesProgressStatus;
    }

    /**
     * @param QuotesProgressStatus $quotesProgressStatus
     * @return QuotesProgressStatusHistory
     */
    public function setQuotesProgressStatus(QuotesProgressStatus $quotesProgressStatus): QuotesProgressStatusHistory
    {
        $this->quotesProgressStatus = $quotesProgressStatus;
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
     * @return QuotesProgressStatusHistory
     */
    public function setId(int $id): QuotesProgressStatusHistory
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
     * @return QuotesProgressStatusHistory
     */
    public function setDateApplication(\DateTime $dateApplication): QuotesProgressStatusHistory
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
     * @return QuotesProgressStatusHistory
     */
    public function setQuote(Quotes $quote): QuotesProgressStatusHistory {
        $this->quote = $quote;
        return $this;
    }


}