<?php

namespace App\DataFixtures\ComponentFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\ComponentExteriorFinish;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentExteriorFinishData extends MaderaFixtures {

    const CREPIS = 'component-exterior-crepis';
    const BOIS = 'component-exterior-bois';

    public function load(ObjectManager $manager) {
        $crepis = new ComponentExteriorFinish();
        $crepis->setLabel("Crépis");
        $manager ->persist($crepis);

        $finitionBois = new ComponentExteriorFinish();
        $finitionBois->setLabel("Finition Bois");
        $manager ->persist($finitionBois);

        $manager->flush();

        $this->addReference(LoadComponentExteriorFinishData::CREPIS, $crepis);
        $this->addReference(LoadComponentExteriorFinishData::BOIS, $finitionBois);
    }

    public function getOrder() {
        return MaderaFixtures::COMPONENT_QUALITY;
    }
}