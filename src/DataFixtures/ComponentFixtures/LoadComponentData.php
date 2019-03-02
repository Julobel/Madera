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
            ->setComponentNature($this->getReference('component-nature-montant'))
            ->addPrice($this->getReference('component-price-price1'))
            ->addPrice($this->getReference('component-price-price2'));
        $manager ->persist($poutre);

        $clou = new Component();
        $clou ->setLabel("clou");
        $clou ->setLength(0);
        $clou ->setSection(0);
        $clou ->setThickness(0);
        $clou ->setWidth(0);
        $clou ->setComponentNature($this->getReference('component-nature-elt-montage'))
            ->addPrice($this->getReference('component-price-price3'))
            ->addPrice($this->getReference('component-price-price4'));
        $manager->persist($clou);

        $manager->flush();

        $this->addReference('component-poutre', $poutre);
        $this->addReference('component-clou', $clou);
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