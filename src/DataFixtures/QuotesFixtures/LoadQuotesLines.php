<?php

namespace App\DataFixtures\QuotesFixtures;


use App\DataFixtures\MaderaFixtures;
use App\DataFixtures\ModuleFixtures\LoadModuleData;
use App\Entity\Quotes\QuotesLine;
use Doctrine\Common\Persistence\ObjectManager;

class LoadQuotesLines extends MaderaFixtures {

    public function load(ObjectManager $manager) {

        for ($i = 0; $i < 20; $i++) {
            $quote1line1 = new QuotesLine();
            $quote1line1->setQuote($this->getReference('quotes-1'))
                ->setModule($this->getReference(LoadModuleData::MURS_DROIT))
                ->setModuleName('Mur Nord')
                ->setModuleQuantity(12);

            $manager ->persist($quote1line1);
            $this->addReference('quotes-' . $i . '-line-1', $quote1line1);

            $quote1line2 = new QuotesLine();
            $quote1line2->setQuote($this->getReference('quotes-1'))
                ->setModule($this->getReference(LoadModuleData::MURS_DROIT))
                ->setModuleName('Mur Sud')
                ->setModuleQuantity(12);

            $manager ->persist($quote1line2);
            $this->addReference('quotes-' . $i . '-line-2', $quote1line2);

            $quote1line3 = new QuotesLine();
            $quote1line3->setQuote($this->getReference('quotes-1'))
                ->setModule($this->getReference(LoadModuleData::MURS_DROIT))
                ->setModuleName('Mur Est')
                ->setModuleQuantity(12);

            $manager ->persist($quote1line3);
            $this->addReference('quotes-' . $i . '-line-3', $quote1line3);

            $quote1line4 = new QuotesLine();
            $quote1line4->setQuote($this->getReference('quotes-1'))
                ->setModule($this->getReference(LoadModuleData::MURS_DROIT))
                ->setModuleName('Mur Ouest')
                ->setModuleQuantity(12);

            $manager ->persist($quote1line4);
            $this->addReference('quotes-' . $i . '-line-4', $quote1line4);

            $quote1line5 = new QuotesLine();
            $quote1line5->setQuote($this->getReference('quotes-1'))
                ->setModule($this->getReference(LoadModuleData::PLANCHER_TEK))
                ->setModuleName('Plancher Teck')
                ->setModuleQuantity(144);

            $manager ->persist($quote1line5);
            $this->addReference('quotes-' . $i . '-line-5', $quote1line5);
        }
        $manager->flush();
    }
    public function getOrder() {
        return MaderaFixtures::QUOTES_LINES;
    }
}