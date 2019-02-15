<?php
/**
 * Created by Jules Aubel
 * Date: 14/02/19
 */

namespace App\Entity\Quotes;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class QuotesAdministrativeState
 * @package App\Entity\Quotes
 * @ORM\Entity
 * @ORM\Table(name="QUOTES_progress_status")
 * @ApiResource()
 */
class QuotesProgressStatus
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the progress status.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Label of the progress status.
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $label;

    /**
     * @var float Percentage payment of the progress status.
     *
     * @ORM\Column(type="float", nullable=false)
     */
    private $percentagePayment;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return QuotesProgressStatus
     */
    public function setId(int $id): QuotesProgressStatus
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
     * @return QuotesProgressStatus
     */
    public function setLabel(string $label): QuotesProgressStatus
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentagePayment(): float
    {
        return $this->percentagePayment;
    }

    /**
     * @param float $percentagePayment
     * @return QuotesProgressStatus
     */
    public function setPercentagePayment(float $percentagePayment): QuotesProgressStatus
    {
        $this->percentagePayment = $percentagePayment;
        return $this;
    }

}