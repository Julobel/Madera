<?php
/**
 * Created by IntelliJ IDEA.
 * User: JB
 * Date: 03/03/2019
 * Time: 19:06
 */

namespace App\DataFixtures\ComponentFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\ComponentWindowFrame;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentWindowFrameData extends MaderaFixtures {
    const CLASSIC = 'component-window-classic';
    const DOUBLE = 'component-window-double';
    public function load(ObjectManager $manager) {
        $classic = new ComponentWindowFrame();
        $classic->setLabel("Classique");
        $manager ->persist($classic);

        $double = new ComponentWindowFrame();
        $double->setLabel("Double Vitrage");
        $manager ->persist($double);

        $manager->flush();

        $this->addReference(LoadComponentWindowFrameData::CLASSIC, $classic);
        $this->addReference(LoadComponentWindowFrameData::DOUBLE, $double);

    }

    public function getOrder() {
        return MaderaFixtures::COMPONENT_QUALITY;
    }
}