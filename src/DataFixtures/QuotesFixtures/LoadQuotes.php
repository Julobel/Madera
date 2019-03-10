<?php

namespace App\DataFixtures\QuotesFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Quotes\Quotes;
use Doctrine\Common\Persistence\ObjectManager;

class LoadQuotes extends MaderaFixtures {

    public function load(ObjectManager $manager) {
        $quote1 = new Quotes();
        $quote1->setAccountingTVA($this->getReference('accounting-tva-20'))
            ->setDiscount(0)
            ->setDate(\DateTime::createFromFormat('d/m/Y', '1/01/2019'))
            ->setActorCommercial($this->getReference('commercial1'))
            ->setProject($this->getReference('project9'));

        $manager ->persist($quote1);
        $this->addReference('quotes-1', $quote1);


        $manager->flush();
    }

    public function getOrder() {
        return MaderaFixtures::QUOTES;
    }
}