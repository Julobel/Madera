<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Accounting;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class AccountingMargin
 * @package App\Entity\Accounting
 * @ORM\Entity
 * @ORM\Table(name="ACCOUNTING_margin")
 * @ApiResource()
 */
class AccountingMargin
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int AccountingMargin Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string AccountingMargin Label
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
     * @return AccountingMargin
     */
    public function setId(int $id): AccountingMargin
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
     * @return AccountingMargin
     */
    public function setLabel(string $label): AccountingMargin
    {
        $this->label = $label;
        return $this;
    }

}