<?php

namespace App\DataFixtures\ModuleFixtures;

use App\DataFixtures\ComponentFixtures\LoadComponentData;
use App\DataFixtures\MaderaFixtures;
use App\Entity\Module\ModuleStructure;
use Doctrine\Common\Persistence\ObjectManager;

class LoadModuleStructureData extends MaderaFixtures {

    public function load(ObjectManager $manager) {

        $struct1MurDroit = new ModuleStructure();
        $struct1MurDroit->setModule($this->getReference(LoadModuleData::MURS_DROIT_PREMIUM))
            ->setComponent($this->getReference(LoadComponentData::POUTRE_35))
            ->setComponentQuantity(4)
            ->setIsProportional(true);
        $manager ->persist($struct1MurDroit);
        $struct2MurDroit = new ModuleStructure();
        $struct2MurDroit->setModule($this->getReference(LoadModuleData::MURS_DROIT_PREMIUM))
            ->setComponent($this->getReference(LoadComponentData::POLYSTYRENE_EXPANSE.'1'))
            ->setComponentQuantity(2.5)
            ->setIsProportional(true);
        $manager ->persist($struct2MurDroit);

        $struct1MurDroit2 = new ModuleStructure();
        $struct1MurDroit2->setModule($this->getReference(LoadModuleData::MURS_DROIT_CLASSIC))
            ->setComponent($this->getReference(LoadComponentData::POUTRE_35))
            ->setComponentQuantity(4)
            ->setIsProportional(true);
        $manager ->persist($struct1MurDroit2);
        $struct2MurDroit2 = new ModuleStructure();
        $struct2MurDroit2->setModule($this->getReference(LoadModuleData::MURS_DROIT_CLASSIC))
            ->setComponent($this->getReference(LoadComponentData::LAINE_VERRE.'1'))
            ->setComponentQuantity(2.5)
            ->setIsProportional(true);
        $manager ->persist($struct2MurDroit2);

        $struct1MurAngle = new ModuleStructure();
        $struct1MurAngle->setModule($this->getReference(LoadModuleData::MURS_ANGLE))
            ->setComponent($this->getReference(LoadComponentData::POUTRE_35))
            ->setComponentQuantity(4)
            ->setIsProportional(true);
        $manager ->persist($struct1MurAngle);
        $struct2MurAngle = new ModuleStructure();
        $struct2MurAngle->setModule($this->getReference(LoadModuleData::MURS_ANGLE))
            ->setComponent($this->getReference(LoadComponentData::POLYSTYRENE_EXPANSE.'1'))
            ->setComponentQuantity(2.5)
            ->setIsProportional(true);
        $manager ->persist($struct2MurAngle);
        $struct3MurAngle = new ModuleStructure();
        $struct3MurAngle->setModule($this->getReference(LoadModuleData::MURS_ANGLE))
            ->setComponent($this->getReference(LoadComponentData::SABOT))
            ->setComponentQuantity(20)
            ->setIsProportional(false);
        $manager ->persist($struct3MurAngle);


        $struct1plancherTek = new ModuleStructure();
        $struct1plancherTek->setModule($this->getReference(LoadModuleData::PLANCHER_TEK))
            ->setComponent($this->getReference(LoadComponentData::PLANCHE_TEK))
            ->setComponentQuantity(8)
            ->setIsProportional(true);
        $manager ->persist($struct1plancherTek);
        $struct3MurAngle = new ModuleStructure();
        $struct3MurAngle->setModule($this->getReference(LoadModuleData::PLANCHER_TEK))
            ->setComponent($this->getReference(LoadComponentData::PLOT))
            ->setComponentQuantity(4)
            ->setIsProportional(true);
        $manager ->persist($struct3MurAngle);

        $manager->flush();
    }


    public function getOrder() {
        return MaderaFixtures::MODULE_STRUCTURE;
    }
}