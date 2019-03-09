<?php
/**
 * Created by Jules Aubel
 * Date: 14/02/19
 */

namespace App\Entity\Actor;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ActorCommercial
 * @package App\Entity\Actor
 * @ORM\Entity
 * @ORM\Table(name="ACTOR_commercial")
 * @ApiResource()
 */
class ActorCommercial
{

    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the commercial
     * @Groups({"get-quotes"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string FirstName of the commercial
     * @Groups({"get-quotes"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $firstName;

    /**
     * @var string LastName of the commercial
     * @Groups({"get-quotes"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $lastName;

    /**
     * @var string Email of the commercial
     * @Groups({"get-quotes"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $email;

    /**
     * @var string Phone number of the commercial
     * @Groups({"get-quotes"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $phoneNUmber;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ActorCommercial
     */
    public function setId(int $id): ActorCommercial
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
     * @return ActorCommercial
     */
    public function setFirstName(string $firstName): ActorCommercial
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
     * @return ActorCommercial
     */
    public function setLastName(string $lastName): ActorCommercial
    {
        $this->lastName = $lastName;
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
     * @return ActorCommercial
     */
    public function setEmail(string $email): ActorCommercial
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNUmber(): string
    {
        return $this->phoneNUmber;
    }

    /**
     * @param string $phoneNUmber
     * @return ActorCommercial
     */
    public function setPhoneNUmber(string $phoneNUmber): ActorCommercial
    {
        $this->phoneNUmber = $phoneNUmber;
        return $this;
    }

}