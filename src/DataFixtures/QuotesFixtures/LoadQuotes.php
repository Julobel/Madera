<?php

namespace App\DataFixtures\QuotesFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Quotes\Quotes;
use Doctrine\Common\Persistence\ObjectManager;

class LoadQuotes extends MaderaFixtures {

    public function load(ObjectManager $manager) {
        for ($i = 0; $i < 20; $i++) {
            $quote = new Quotes();
            $quote->setAccountingTVA($this->getReference('accounting-tva-20'))
                ->setDiscount(0)
                ->setDate(\DateTime::createFromFormat('d/m/Y', '1/01/2019'))
                ->setActorCommercial($this->getReference('commercial1'))
                ->setProject($this->getReference('project9'));

            $manager ->persist($quote);
            $this->addReference('quotes-' . $i, $quote);
        }
        $manager->flush();
    }

    public function getOrder() {
        return MaderaFixtures::QUOTES;
    }
}