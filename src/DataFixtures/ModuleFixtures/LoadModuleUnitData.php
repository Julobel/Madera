<?php

namespace App\DataFixtures\ModuleFixtures;

use App\DataFixtures\MaderaFixtures;
use App\Entity\Module\ModuleUnit;
use Doctrine\Common\Persistence\ObjectManager;

class LoadModuleUnitData extends MaderaFixtures{

    const METRE_LINEAIRE = 'module-unit-lineaire';
    const METRE_CARRE = 'module-unit-carre';
    const UNITE = 'module-unit-unite';

    public function load(ObjectManager $manager) {

        $metreLineaire = new ModuleUnit();
        $metreLineaire->setLabel('m');
        $manager ->persist($metreLineaire);
        $this->addReference(LoadModuleUnitData::METRE_LINEAIRE, $metreLineaire);

        $metreCarre = new ModuleUnit();
        $metreCarre->setLabel('m');
        $manager->persist($metreCarre);
        $this->addReference(LoadModuleUnitData::METRE_CARRE, $metreCarre);

        $unite = new ModuleUnit();
        $unite->setLabel('m');
        $manager->persist($unite);
        $this->addReference(LoadModuleUnitData::UNITE, $unite);

        $manager->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return MaderaFixtures::MODULE_UNIT;
    }
}