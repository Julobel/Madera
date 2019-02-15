<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Quotes;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class QuotesAdministrativeState
 * @package App\Entity\Quotes
 * @ORM\Entity
 * @ORM\Table(name="QUOTES_progress_status_history")
 * @ApiResource()
 */
class QuotesProgressStatusHistory
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the progress status history.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \DateTime Date of the progress status history.
     *
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $dateApplication;

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