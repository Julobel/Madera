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
     * @Groups({"get-quotes-progress-status-history", "post-quotes-progress-status-history"})
     *
     * @ORM\ManyToOne(targetEntity="QuotesProgressStatus")
     * @ORM\JoinColumn(name="quotes_progress_status_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $quotesProgressStatus;

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
     * @return mixed
     */
    public function getQuotesProgressStatus()
    {
        return $this->quotesProgressStatus;
    }

    /**
     * @param mixed $quotesProgressStatus
     * @return QuotesProgressStatusHistory
     */
    public function setQuotesProgressStatus($quotesProgressStatus): QuotesProgressStatusHistory
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

}