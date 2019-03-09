<?php

namespace App\DataFixtures\RangeFixtures;

use App\DataFixtures\ComponentFixtures\LoadComponentCoveringData;
use App\DataFixtures\ComponentFixtures\LoadComponentExteriorFinishData;
use App\DataFixtures\ComponentFixtures\LoadComponentInsulationData;
use App\DataFixtures\ComponentFixtures\LoadComponentInteriorFinishData;
use App\DataFixtures\ComponentFixtures\LoadComponentWindowFrameData;
use App\DataFixtures\MaderaFixtures;
use App\Entity\Range\Range;
use Doctrine\Common\Persistence\ObjectManager;

class LoadRangeData extends MaderaFixtures{

    const PREMIUM = 'range-range-premium';
    const CLASSIC = 'range-range-classic';
    public function load(ObjectManager $manager) {
        $premium = new Range();
        $premium->setLabel("Premium")
                ->setComponentCovering($this->getReference(LoadComponentCoveringData::TUILES))
                ->setComponentExteriorFinish($this->getReference(LoadComponentExteriorFinishData::CREPIS))
                ->setComponentInsulation($this->getReference(LoadComponentInsulationData::SYNTH))
                ->setComponentInteriorFinish($this->getReference(LoadComponentInteriorFinishData::GYPSE))
                ->setComponentWindowFrame($this->getReference(LoadComponentWindowFrameData::DOUBLE));
        $manager ->persist($premium);

        $classic = new Range();
        $classic->setLabel("Classique")
                ->setComponentCovering($this->getReference(LoadComponentCoveringData::ARDOISES))
                ->setComponentExteriorFinish($this->getReference(LoadComponentExteriorFinishData::BOIS))
                ->setComponentInsulation($this->getReference(LoadComponentInsulationData::NATUREL))
                ->setComponentInteriorFinish($this->getReference(LoadComponentInteriorFinishData::PLATRE))
                ->setComponentWindowFrame($this->getReference(LoadComponentWindowFrameData::CLASSIC));
        $manager ->persist($classic);

        $manager->flush();

        $this->addReference(LoadRangeData::PREMIUM, $premium);
        $this->addReference(LoadRangeData::CLASSIC, $classic);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return MaderaFixtures::ACCOUNTING_MARGIN;
    }
}