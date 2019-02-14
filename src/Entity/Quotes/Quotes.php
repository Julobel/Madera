<?php
/**
 * Created by Jules Aubel
 * Date: 14/02/19
 */

namespace App\Entity\Quotes;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Quotes
 * @package App\Entity\Quotes
 * @ORM\Entity
 * @ApiResource()
 */
class Quotes
{
    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////


    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int The id of the quotes.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \DateTime The creation date of the quotes
     *
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var float Discount of the quotes
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $discount;

    /**
     * @var float Selling price of the quotes
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $sellingPrice;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
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
     */
    public function setDiscount(float $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @return float
     */
    public function getSellingPrice(): float
    {
        return $this->sellingPrice;
    }

    /**
     * @param float $sellingPrice
     */
    public function setSellingPrice(float $sellingPrice): void
    {
        $this->sellingPrice = $sellingPrice;
    }

}