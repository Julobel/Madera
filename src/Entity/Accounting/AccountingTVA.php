<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Accounting;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class AccountingTVA
 * @package App\Entity\Accounting
 * @ORM\Entity
 * @ORM\Table(name="ACCOUNTING_tva")
 * @ApiResource()
 */
class AccountingTVA
{
    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int AccountingTVA Id
     * @Groups({"get-quotes"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string AccountingTVA Label
     * @Groups({"get-quotes"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $label;

    /**
     * @var boolean AccountingTVA applicable
     * @Groups({"get-quotes"})
     *
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $applicable;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AccountingTVA
     */
    public function setId(int $id): AccountingTVA
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
     * @return AccountingTVA
     */
    public function setLabel(string $label): AccountingTVA
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return bool
     */
    public function isApplicable(): bool
    {
        return $this->applicable;
    }

    /**
     * @param bool $applicable
     * @return AccountingTVA
     */
    public function setApplicable(bool $applicable): AccountingTVA
    {
        $this->applicable = $applicable;
        return $this;
    }

}