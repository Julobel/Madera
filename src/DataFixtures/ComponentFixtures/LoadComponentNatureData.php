<?php

namespace App\DataFixtures\ComponentFixtures;

use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\ComponentNature;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentNatureData extends MaderaFixtures{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {
        $montant = new ComponentNature();
        $montant->setLabel('Montant')
            ->setComponentUnit($this->getReference('component-unit-lg'));
        $manager ->persist($montant);

        $eltMontage = new ComponentNature();
        $eltMontage->setLabel('Element de Montage')
            ->setComponentUnit($this->getReference('component-unit-piece'));
        $manager->persist($eltMontage);

        $isolation = new ComponentNature();
        $isolation->setLabel('Panneaux d’isolation et pare-pluie')
            ->setComponentUnit($this->getReference('component-unit-surface'));
        $manager->persist($isolation);

        $manager->flush();

        $this->addReference('component-nature-montant', $montant);
        $this->addReference('component-nature-elt-montage', $eltMontage);
        $this->addReference('component-nature-isolation', $isolation);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return MaderaFixtures::COMPONENT_NATURE;
    }
}