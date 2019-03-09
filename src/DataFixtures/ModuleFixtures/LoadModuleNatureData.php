<?php

namespace App\DataFixtures\ModuleFixtures;

use App\DataFixtures\MaderaFixtures;
use App\Entity\Module\ModuleNature;
use Doctrine\Common\Persistence\ObjectManager;

class LoadModuleNatureData extends MaderaFixtures{

    const MURS_EXTERIEURS = 'module-nature-murs-ext';
    const CLOISONS_INTERIEURS = 'module-nature-cloisons-int';
    const PLANCHER_DALLE = 'module-nature-plancher-dalle';
    const PLANCHER_PORTEUR = 'module-nature-plancher-porteur';
    const FERME = 'module-nature-ferme';
    const TOIT = 'module-nature-toit';

    public function load(ObjectManager $manager) {
        $mursExt = new ModuleNature();
        $mursExt->setLabel('Murs extérieurs')
            ->setModuleUnit($this->getReference(LoadModuleUnitData::METRE_LINEAIRE));
        $manager ->persist($mursExt);
        $this->addReference(LoadModuleNatureData::MURS_EXTERIEURS, $mursExt);

        $cloisonsInt = new ModuleNature();
        $cloisonsInt->setLabel('Cloisons intérieures')
            ->setModuleUnit($this->getReference(LoadModuleUnitData::METRE_LINEAIRE));
        $manager->persist($cloisonsInt);
        $this->addReference(LoadModuleNatureData::CLOISONS_INTERIEURS, $cloisonsInt);

        $plancherDalle = new ModuleNature();
        $plancherDalle->setLabel('Plancher sur dalle')
            ->setModuleUnit($this->getReference(LoadModuleUnitData::METRE_CARRE));
        $manager->persist($plancherDalle);
        $this->addReference(LoadModuleNatureData::PLANCHER_DALLE, $plancherDalle);

        $plancherPorteur = new ModuleNature();
        $plancherPorteur->setLabel('Plancher porteur')
            ->setModuleUnit($this->getReference(LoadModuleUnitData::METRE_CARRE));
        $manager->persist($plancherPorteur);
        $this->addReference(LoadModuleNatureData::PLANCHER_PORTEUR, $plancherPorteur);

        $ferme = new ModuleNature();
        $ferme->setLabel('Fermes de charpente')
            ->setModuleUnit($this->getReference(LoadModuleUnitData::UNITE));
        $manager->persist($ferme);
        $this->addReference(LoadModuleNatureData::FERME, $ferme);

        $toit = new ModuleNature();
        $toit->setLabel('Couverture (toit)')
            ->setModuleUnit($this->getReference(LoadModuleUnitData::METRE_CARRE));
        $manager->persist($toit);
        $this->addReference(LoadModuleNatureData::TOIT, $toit);

        $manager->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return MaderaFixtures::MODULE_NATURE;
    }
}