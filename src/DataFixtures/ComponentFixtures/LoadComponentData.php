<?php

namespace App\DataFixtures\ComponentFixtures;

use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\Component;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentData extends MaderaFixtures{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {
        $poutre = new Component();
        $poutre ->setLabel("poutre")
            ->setLength(2400)
            ->setSection(35)
            ->setThickness(20)
            ->setWidth(50)
            ->setComponentNature($this->getReference(LoadComponentNatureData::MONTANT))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'1'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'2'));
        $manager ->persist($poutre);

        $sabot = new Component();
        $sabot ->setLabel("Sabot métallique")
            ->setLength(0)
            ->setSection(0)
            ->setThickness(0)
            ->setWidth(0)
            ->setComponentNature($this->getReference(LoadComponentNatureData::ELT_MONTAGE))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'3'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'4'));
        $manager->persist($sabot);


        $ba13 = new Component();
        $ba13 ->setLabel("Plaque de plâtre")
            ->setLength(0)
            ->setSection(0)
            ->setThickness(130)
            ->setWidth(0)
            ->setComponentNature($this->getReference(LoadComponentNatureData::PANNEAUX))
            ->setComponentQuality($this->getReference(LoadComponentInteriorFinishData::PLATRE))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'5'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'6'));
        $manager->persist($sabot);

        $tuile = new Component();
        $tuile->setLabel("Tuile Méridionale")
            ->setLength(500)
            ->setSection(0)
            ->setThickness(0)
            ->setWidth(300)
            ->setComponentNature($this->getReference(LoadComponentNatureData::COUVERTURE))
            ->setComponentQuality($this->getReference(LoadComponentCoveringData::TUILES))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'7'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'8'));
        $manager->persist($tuile);


        $tuileCanal = new Component();
        $tuileCanal->setLabel("Tuile Canal")
            ->setLength(500)
            ->setSection(0)
            ->setThickness(0)
            ->setWidth(150)
            ->setComponentNature($this->getReference(LoadComponentNatureData::COUVERTURE))
            ->setComponentQuality($this->getReference(LoadComponentCoveringData::TUILES))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'9'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'10'));
        $manager->persist($tuileCanal);


        $ardoisePetite = new Component();
        $ardoisePetite->setLabel("Ardoise Petite")
            ->setLength(100)
            ->setSection(0)
            ->setThickness(0)
            ->setWidth(100)
            ->setComponentNature($this->getReference(LoadComponentNatureData::COUVERTURE))
            ->setComponentQuality($this->getReference(LoadComponentCoveringData::ARDOISES))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'11'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'12'));
        $manager->persist($ardoisePetite);

        $ardoiseGrande = new Component();
        $ardoiseGrande->setLabel("Ardoise Grande")
            ->setLength(300)
            ->setSection(0)
            ->setThickness(0)
            ->setWidth(300)
            ->setComponentNature($this->getReference(LoadComponentNatureData::COUVERTURE))
            ->setComponentQuality($this->getReference(LoadComponentCoveringData::ARDOISES))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'13'))
            ->addPrice($this->getReference(LoadComponentPriceData::PRICE.'14'));
        $manager->persist($ardoiseGrande);

        $manager->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return MaderaFixtures::COMPONENT;
    }
}