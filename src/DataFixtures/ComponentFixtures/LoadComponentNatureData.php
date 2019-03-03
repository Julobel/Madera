<?php

namespace App\DataFixtures\ComponentFixtures;

use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\ComponentNature;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentNatureData extends MaderaFixtures{
    const MONTANT = 'component-nature-montant';
    const ELT_MONTAGE = 'component-nature-elt-montage';
    const ISOLATION = 'component-nature-isolation';
    const PANNEAUX = 'component-nature-panneaux';
    const PLANCHER = 'component-nature-plancher';
    const COUVERTURE = 'component-nature-couverture';

    public function load(ObjectManager $manager) {
        $montant = new ComponentNature();
        $montant->setLabel('Montant')
            ->setComponentUnit($this->getReference(LoadComponentUnitData::LONGUEUR));
        $manager ->persist($montant);

        $eltMontage = new ComponentNature();
        $eltMontage->setLabel('Element de Montage')
            ->setComponentUnit($this->getReference(LoadComponentUnitData::PIECE));
        $manager->persist($eltMontage);

        $isolation = new ComponentNature();
        $isolation->setLabel('Panneaux d’isolation et pare-pluie')
            ->setComponentUnit($this->getReference(LoadComponentUnitData::SURFACE));
        $manager->persist($isolation);

        $panneaux = new ComponentNature();
        $panneaux->setLabel('Panneaux intermédiaires et de couverture')
            ->setComponentUnit($this->getReference(LoadComponentUnitData::SURFACE));
        $manager->persist($panneaux);

        $plancher = new ComponentNature();
        $plancher->setLabel('Plancher')
            ->setComponentUnit($this->getReference(LoadComponentUnitData::SURFACE));
        $manager->persist($plancher);

        $couverture = new ComponentNature();
        $couverture->setLabel('Couverture')
            ->setComponentUnit($this->getReference(LoadComponentUnitData::SURFACE));
        $manager->persist($couverture);

        $manager->flush();

        $this->addReference(LoadComponentNatureData::MONTANT, $montant);
        $this->addReference(LoadComponentNatureData::ELT_MONTAGE, $eltMontage);
        $this->addReference(LoadComponentNatureData::ISOLATION, $isolation);
        $this->addReference(LoadComponentNatureData::PANNEAUX, $panneaux);
        $this->addReference(LoadComponentNatureData::PLANCHER, $plancher);
        $this->addReference(LoadComponentNatureData::COUVERTURE, $couverture);
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