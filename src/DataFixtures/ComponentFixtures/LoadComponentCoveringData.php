<?php

namespace App\DataFixtures\ComponentFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\ComponentCovering;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentCoveringData extends MaderaFixtures{
    const TUILES = 'component-covering-tuiles';
    const ARDOISES = 'component-covering-ardoise';
    public function load(ObjectManager $manager) {
        $tuiles = new ComponentCovering();
        $tuiles->setLabel("Tuiles");
        $manager ->persist($tuiles);

        $ardoises = new ComponentCovering();
        $ardoises->setLabel("Ardoises");
        $manager ->persist($ardoises);

        $manager->flush();

        $this->addReference(LoadComponentCoveringData::TUILES, $tuiles);
        $this->addReference(LoadComponentCoveringData::ARDOISES, $ardoises);
    }

    public function getOrder() {
        return MaderaFixtures::COMPONENT_QUALITY;
    }
}