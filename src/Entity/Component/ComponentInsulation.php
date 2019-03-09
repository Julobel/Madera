<?php

namespace App\Entity\Component;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ComponentInsulation
 * @package App\Entity\Component
 * @ORM\Entity
 * @ApiResource()
 */
class ComponentInsulation extends ComponentQuality
{
}