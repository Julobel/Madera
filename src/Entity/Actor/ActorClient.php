<?php

namespace App\Entity\Actor;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ActorClient
 * @package App\Entity\Actor
 * @ORM\Entity
 * @ORM\Table(name="ACTOR_client")
 * @ApiResource()
 */
class ActorClient
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the client
     * @Groups({"get-project", "get-quotes"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string First name of the client
     * @Groups({"get-project", "get-quotes"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $firstName;

    /**
     * @var string Last name of the client
     * @Groups({"get-project", "get-quotes"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $lastName;

    /**
     * @var integer Street number
     * @Groups({"get-project", "get-quotes"})
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $streetNumber;

    /**
     * @var string
     * @Groups({"get-project", "get-quotes"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $address1;

    /**
     * @var string
     * @Groups({"get-project", "get-quotes"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $address2;

    /**
     * @var integer Postal cod eof the client
     * @Groups({"get-project", "get-quotes"})
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $postalCode;

    /**
     * @var string City of the client
     * @Groups({"get-project", "get-quotes"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $city;

    /**
     * @var string State of the client
     * @Groups({"get-project", "get-quotes"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $state;

    /**
     * @var integer Phone number of the client
     * @Groups({"get-project", "get-quotes"})
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $phoneNumber;

    /**
     * @var string Email of the client
     * @Groups({"get-project", "get-quotes"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $email;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ActorClient
     */
    public function setId(int $id): ActorClient
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return ActorClient
     */
    public function setFirstName(string $firstName): ActorClient
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return ActorClient
     */
    public function setLastName(string $lastName): ActorClient
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return int
     */
    public function getStreetNumber(): int
    {
        return $this->streetNumber;
    }

    /**
     * @param int $streetNumber
     * @return ActorClient
     */
    public function setStreetNumber(int $streetNumber): ActorClient
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1(): string
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     * @return ActorClient
     */
    public function setAddress1(string $address1): ActorClient
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2(): string
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     * @return ActorClient
     */
    public function setAddress2(string $address2): ActorClient
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostalCode(): int
    {
        return $this->postalCode;
    }

    /**
     * @param int $postalCode
     * @return ActorClient
     */
    public function setPostalCode(int $postalCode): ActorClient
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return ActorClient
     */
    public function setCity(string $city): ActorClient
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return ActorClient
     */
    public function setState(string $state): ActorClient
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneNumber(): int
    {
        return $this->phoneNumber;
    }

    /**
     * @param int $phoneNumber
     * @return ActorClient
     */
    public function setPhoneNumber(int $phoneNumber): ActorClient
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return ActorClient
     */
    public function setEmail(string $email): ActorClient
    {
        $this->email = $email;
        return $this;
    }

}