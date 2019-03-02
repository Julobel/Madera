<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

/**
 * Class MaderaFixtures for all App fixture
 * this class manage the order of fixture generation
 * @package App\DataFixtures
 */
abstract class MaderaFixtures extends Fixture implements OrderedFixtureInterface{

    /*
     * Manage here the entities order
     */

    //COMPONENT PACKAGE
    const COMPONENT_UNIT = 1;
    const COMPONENT_NATURE = MaderaFixtures::COMPONENT_UNIT+1;
    const COMPONENT_PRICE = 1;
    const COMPONENT = MaderaFixtures::COMPONENT_NATURE + MaderaFixtures::COMPONENT_PRICE;

    //MODULE PACKAGE
    const MODULE = MaderaFixtures::COMPONENT+1;
}
