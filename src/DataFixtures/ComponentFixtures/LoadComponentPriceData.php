<?php

namespace App\DataFixtures\ComponentFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Component\ComponentPrice;
use Doctrine\Common\Persistence\ObjectManager;

class LoadComponentPriceData extends MaderaFixtures{
    /*
     * Classe qui génère 100 prix récupérable avec la reference :
     * 'component-price-price-' concaténer à un nombre entre 1 et 100
     * les prix impair ont une date de fin ; pas les prix pair
     */
    const PRICE = 'component-price-price-';
    public function load(ObjectManager $manager) {
        for ($i = 1;$i<100; $i=$i+2){
            $price1 = new ComponentPrice();
            $price1->setValue($i)
                ->setStartDate(\DateTime::createFromFormat('d/m/Y', '1/01/2019'))
                ->setEndDate(\DateTime::createFromFormat('d/m/Y', '31/01/2019'));
            $manager->persist($price1);

            $price2 = new ComponentPrice();
            $price2->setValue($i+1)
                ->setStartDate(\DateTime::createFromFormat('d/m/Y', '1/02/2019'));
            $manager->persist($price2);


            $this->addReference(LoadComponentPriceData::PRICE.$i, $price1);
            $this->addReference(LoadComponentPriceData::PRICE.($i+1), $price2);
        }
        $manager->flush();

    }

    public function getOrder() {
        return MaderaFixtures::COMPONENT_PRICE;
    }
}