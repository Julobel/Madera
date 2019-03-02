<?php
/**
 * Created by IntelliJ IDEA.
 * User: JB
 * Date: 02/03/2019
 * Time: 16:50
 */

namespace App\DataFixtures\ComponentFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\ComponentPrice;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentPriceData extends MaderaFixtures{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {
        $price1 = new ComponentPrice();
        $price1->setValue(20.0)
            ->setStartDate(\DateTime::createFromFormat('d/m/Y', '1/01/2019'))
            ->setEndDate(\DateTime::createFromFormat('d/m/Y', '31/01/2019'));
        $manager->persist($price1);

        $price2 = new ComponentPrice();
        $price2->setValue(22.2)
            ->setStartDate(\DateTime::createFromFormat('d/m/Y', '1/02/2019'));
        $manager->persist($price2);

        $price3 = new ComponentPrice();
        $price3->setValue(0.01)
            ->setStartDate(\DateTime::createFromFormat('d/m/Y', '1/01/2019'))
            ->setEndDate(\DateTime::createFromFormat('d/m/Y', '31/01/2019'));
        $manager->persist($price3);

        $price4 = new ComponentPrice();
        $price4->setValue(0.02)
            ->setStartDate(\DateTime::createFromFormat('d/m/Y', '1/02/2019'));
        $manager->persist($price4);

        $manager->flush();

        $this->addReference('component-price-price1', $price1);
        $this->addReference('component-price-price2', $price2);
        $this->addReference('component-price-price3', $price3);
        $this->addReference('component-price-price4', $price4);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return MaderaFixtures::COMPONENT_PRICE;
    }
}