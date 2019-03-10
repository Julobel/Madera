<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Project;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class Project
 * @package App\Entity\Actor
 * @ORM\Entity
 * @ORM\Table(name="PROJECT_project")
 * @ApiResource(
 *     collectionOperations={
 *          "GET"={
 *             "normalization_context"={"groups"={"get-project"}}
 *           },
 *          "POST"={
 *             "denormalization_context"={"groups"={"post-project"}}
 *          }
 *     },
 *)
 */
class Project
{
    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @Groups({"get-quotes", "get-project", "post-project"})
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Actor\ActorClient")
     * @ORM\JoinColumn(name="actor_client_id", referencedColumnName="id", onDelete="RESTRICT")
     */
    private $actorClientId;


    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    /**
     * @var int Id of the project
     * @Groups({"get-quotes", "get-project", "post-project"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Name of the project
     * @Groups({"get-quotes", "get-project", "post-project"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $name;

    /**
     * @var \DateTime Date of the project
     * @Groups({"get-quotes", "post-project"})
     *
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Project
     */
    public function setId(int $id): Project
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Project
     */
    public function setName(string $name): Project
    {
        $this->name = $name;
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
     * @return Project
     */
    public function setDate(\DateTime $date): Project
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActorClientId()
    {
        return $this->actorClientId;
    }

    /**
     * @param mixed $actorClientId
     * @return Project
     */
    public function setActorClientId($actorClientId): Project
    {
        $this->actorClientId = $actorClientId;
        return $this;
    }

}