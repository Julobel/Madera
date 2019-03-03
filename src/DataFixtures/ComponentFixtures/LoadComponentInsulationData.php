<?php

namespace App\DataFixtures\ComponentFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\ComponentInsulation;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentInsulationData extends MaderaFixtures {
    const SYNTH = 'component-insulation-synth';
    const BIO = 'component-insulation-bio';
    const NATUREL = 'component-insulation-natural';
    public function load(ObjectManager $manager) {
        $synth = new ComponentInsulation();
        $synth->setLabel("Synthétique");
        $manager ->persist($synth);

        $bio = new ComponentInsulation();
        $bio->setLabel("Biologique");
        $manager ->persist($bio);

        $naturel = new ComponentInsulation();
        $naturel->setLabel("Naturel");
        $manager ->persist($naturel);

        $manager->flush();

        $this->addReference(LoadComponentInsulationData::SYNTH, $synth);
        $this->addReference(LoadComponentInsulationData::BIO, $bio);
        $this->addReference(LoadComponentInsulationData::NATUREL, $naturel);

    }

    public function getOrder() {
        return MaderaFixtures::COMPONENT_QUALITY;
    }
}