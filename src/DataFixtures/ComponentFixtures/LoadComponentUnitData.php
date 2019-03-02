<?php

namespace App\DataFixtures\ComponentFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\ComponentUnit;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentUnitData extends MaderaFixtures{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {

        $lgUnit = new ComponentUnit();
        $lgUnit->setLabel('Longueur en mm');
        $manager ->persist($lgUnit);

        $pieceUnit = new ComponentUnit();
        $pieceUnit->setLabel('Pièce');
        $manager->persist($pieceUnit);

        $surface = new ComponentUnit();
        $surface->setLabel('Surface en M2');
        $manager->persist($surface);

        $manager->flush();

        $this->addReference('component-unit-lg', $lgUnit);
        $this->addReference('component-unit-piece', $pieceUnit);
        $this->addReference('component-unit-surface', $surface);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return MaderaFixtures::COMPONENT_UNIT;
    }
}