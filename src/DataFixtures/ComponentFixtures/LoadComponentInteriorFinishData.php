<?php

namespace App\DataFixtures\ComponentFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\ComponentInteriorFinish;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentInteriorFinishData extends MaderaFixtures {
    const PLATRE = 'component-interior-platre';
    const GYPSE = 'component-interior-gypse';
    public function load(ObjectManager $manager) {
        $platre = new ComponentInteriorFinish();
        $platre->setLabel("Plâtre");
        $manager ->persist($platre);

        $gypse = new ComponentInteriorFinish();
        $gypse->setLabel("Gypse");
        $manager ->persist($gypse);

        $manager->flush();

        $this->addReference(LoadComponentInteriorFinishData::PLATRE, $platre);
        $this->addReference(LoadComponentInteriorFinishData::GYPSE, $gypse);

    }

    public function getOrder() {
        return MaderaFixtures::COMPONENT_QUALITY;
    }
}