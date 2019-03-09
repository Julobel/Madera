<?php

namespace App\DataFixtures\ModuleFixtures;

use App\DataFixtures\MaderaFixtures;
use App\Entity\Module\ModuleWoodenFrameworkType;
use Doctrine\Common\Persistence\ObjectManager;

class LoadModuleWoodenFrameworkTypeData extends MaderaFixtures{


    const SANS_ANGLE = 'module-wooden-framework-sans-angles';
    const ANGLE_OUVRANT = 'module-wooden-framework-angle-ouvrant';
    const ANGLE_FERMANT= 'module-wooden-framework-angle-fermant';

    public function load(ObjectManager $manager) {

        $sansAngle = new ModuleWoodenFrameworkType();
        $sansAngle->setLabel('Sans Angle');
        $manager ->persist($sansAngle);
        $this->addReference(LoadModuleWoodenFrameworkTypeData::SANS_ANGLE, $sansAngle);

        $angleOuvrant = new ModuleWoodenFrameworkType();
        $angleOuvrant->setLabel('Angles ouvrant');
        $manager->persist($angleOuvrant);
        $this->addReference(LoadModuleWoodenFrameworkTypeData::ANGLE_OUVRANT, $angleOuvrant);

        $angleFermant = new ModuleWoodenFrameworkType();
        $angleFermant->setLabel('Angles fermant');
        $manager->persist($angleFermant);
        $this->addReference(LoadModuleWoodenFrameworkTypeData::ANGLE_FERMANT, $angleFermant);

        $manager->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return MaderaFixtures::MODULE_WOODEN_FRAMEWORK;
    }
}