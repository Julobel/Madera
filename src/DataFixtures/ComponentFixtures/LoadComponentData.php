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
        $poutre ->setLabel("poutre");
        $poutre ->setLength(2400);
        $poutre ->setSection(35);
        $poutre ->setThickness(20);
        $poutre ->setWidth(50);
        $manager ->persist($poutre);

        $clou = new Component();
        $clou ->setLabel("clou");
        $clou ->setLength(0);
        $clou ->setSection(0);
        $clou ->setThickness(0);
        $clou ->setWidth(0);
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