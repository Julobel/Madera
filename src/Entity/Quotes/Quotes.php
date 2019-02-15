<?php
/**
 * Created by Jules Aubel
 * Date: 14/02/19
 */

namespace App\Entity\Quotes;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Quotes
 * @package App\Entity\Quotes
 * @ORM\Entity
 * @ORM\Table(name="QUOTES_quotes")
 * @ApiResource(attributes={
 *     "normalization_context"={"groups"={"get", "post"}},
 *     "denormalization_context"={"groups"={"post"}}
 * })
 */
class Quotes

/*

 *     denormalizationContext={"get"},
 *     normalizationContext={"post", "get"},

 *     collectionOperations={
 *          "POST"={
 *              "normalization_context"={"groups"={"post"}},
 *              "denormalization_context"={"groups"={"post"}},
 *          },
 *          "GET"
 *     }
 */

{

    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @var \App\Entity\Quotes\QuotesAdministrativeState
     * @Groups({"post", "get"})
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\Quotes\QuotesAdministrativeState", cascade={"persist"})
     * @ORM\JoinColumn(name="administrative_state_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $administrativeState;


    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the quotes.
     * @Groups({"get"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \DateTime Creation date of the quotes
     * @Groups({"post", "get"})
     *
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var float Discount of the quotes
     * @Groups({"post", "get"})
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $discount;

    /**
     * @var float Selling price of the quotes
     * @Groups({"post", "get"})
     *
     * @ORM\Column(type="float", nullable=true)
     */
    private $sellingPrice;

    /**
     * @return QuotesAdministrativeState
     */
    public function getAdministrativeState(): QuotesAdministrativeState
    {
        return $this->administrativeState;
    }

    /**
     * @param QuotesAdministrativeState $administrativeState
     * @return Quotes
     */
    public function setAdministrativeState(QuotesAdministrativeState $administrativeState): Quotes
    {
        $this->administrativeState = $administrativeState;
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
    public function getSellingPrice(): float
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

}