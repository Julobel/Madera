<?php
/**
 * Created by Jules Aubel
 * Date: 15/02/19
 */

namespace App\Entity\Component;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Class ComponentUnit
 * @package App\Entity\Component
 * @ORM\Entity
 * @ORM\Table(name="COMPONENT_unit")
 * @ApiResource()
 */
class ComponentUnit
{
    //////////////////////////////////
    // RELATIONS
    //////////////////////////////////

    /**
     * @ORM\OneToMany(targetEntity="ComponentNature", mappedBy="componentUnit")
     * @ORM\JoinColumn(name="component_nature_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $componentNatures;


    //////////////////////////////////
    // PROPERTIES
    //////////////////////////////////

    public function __construct()
    {
        $this->componentNatures = new ArrayCollection();
    }

    /**
     * @var int ComponentUnit Id
     * @Groups({"component-nature"})
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string ComponentUnit Label
     * @Groups({"component-nature"})
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $label;

    /**
     * @return mixed
     */
    public function getComponentNatures()
    {
        return $this->componentNatures;
    }

    /**
     * @param mixed $componentNatures
     * @return ComponentUnit
     */
    public function setComponentNatures($componentNatures): ComponentUnit
    {
        $this->componentNatures = $componentNatures;
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
     * @return ComponentUnit
     */
    public function setId(int $id): ComponentUnit
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
     * @return ComponentUnit
     */
    public function setLabel(string $label): ComponentUnit
    {
        $this->label = $label;
        return $this;
    }

}