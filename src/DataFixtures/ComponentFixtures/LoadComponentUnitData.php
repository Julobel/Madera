<?php

namespace App\DataFixtures\ComponentFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\ComponentUnit;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentUnitData extends MaderaFixtures{
    const LONGUEUR = 'component-unit-lg';
    const PIECE = 'component-unit-piece';
    const SURFACE = 'component-unit-surface';
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

        $this->addReference(LoadComponentUnitData::LONGUEUR, $lgUnit);
        $this->addReference(LoadComponentUnitData::PIECE, $pieceUnit);
        $this->addReference(LoadComponentUnitData::SURFACE, $surface);
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