<?php

namespace App\DataFixtures\QuotesFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Quotes\QuotesProgressStatusHistory;
use Doctrine\Common\Persistence\ObjectManager;

class LoadQuotesProgressStatusHistory extends MaderaFixtures {

    public function load(ObjectManager $manager) {

        $stateprogress1 = new QuotesProgressStatusHistory();
        $stateprogress1->setQuote($this->getReference('quotes-1'))
            ->setQuotesProgressStatus($this->getReference(LoadQuotesProgressStatus::SIGNATURE))
            ->setDateApplication(\DateTime::createFromFormat('d/m/Y', '10/02/2019'));
        $manager ->persist($stateprogress1);

        $stateprogress2 = new QuotesProgressStatusHistory();
        $stateprogress2->setQuote($this->getReference('quotes-1'))
            ->setQuotesProgressStatus($this->getReference(LoadQuotesProgressStatus::PERMIS))
            ->setDateApplication(\DateTime::createFromFormat('d/m/Y', '12/02/2019'));
        $manager ->persist($stateprogress2);

        $stateprogress3 = new QuotesProgressStatusHistory();
        $stateprogress3->setQuote($this->getReference('quotes-1'))
            ->setQuotesProgressStatus($this->getReference(LoadQuotesProgressStatus::CHANTIER))
            ->setDateApplication(\DateTime::createFromFormat('d/m/Y', '14/02/2019'));
        $manager ->persist($stateprogress3);

        $stateprogress4 = new QuotesProgressStatusHistory();
        $stateprogress4->setQuote($this->getReference('quotes-1'))
            ->setQuotesProgressStatus($this->getReference(LoadQuotesProgressStatus::FONDATIONS))
            ->setDateApplication(\DateTime::createFromFormat('d/m/Y', '14/03/2019'));
        $manager ->persist($stateprogress4);

        $stateprogress5 = new QuotesProgressStatusHistory();
        $stateprogress5->setQuote($this->getReference('quotes-1'))
            ->setQuotesProgressStatus($this->getReference(LoadQuotesProgressStatus::MURS))
            ->setDateApplication(\DateTime::createFromFormat('d/m/Y', '14/04/2019'));
        $manager ->persist($stateprogress5);

        $stateprogress6 = new QuotesProgressStatusHistory();
        $stateprogress6->setQuote($this->getReference('quotes-1'))
            ->setQuotesProgressStatus($this->getReference(LoadQuotesProgressStatus::ETANCHE))
            ->setDateApplication(\DateTime::createFromFormat('d/m/Y', '14/05/2019'));
        $manager ->persist($stateprogress6);

        $stateprogress7 = new QuotesProgressStatusHistory();
        $stateprogress7->setQuote($this->getReference('quotes-1'))
            ->setQuotesProgressStatus($this->getReference(LoadQuotesProgressStatus::EQUIPEMENT))
            ->setDateApplication(\DateTime::createFromFormat('d/m/Y', '14/06/2019'));
        $manager ->persist($stateprogress7);

        $stateprogress8 = new QuotesProgressStatusHistory();
        $stateprogress8->setQuote($this->getReference('quotes-1'))
            ->setQuotesProgressStatus($this->getReference(LoadQuotesProgressStatus::CLES))
            ->setDateApplication(\DateTime::createFromFormat('d/m/Y', '14/07/2019'));
        $manager ->persist($stateprogress8);

        $manager->flush();
    }

    public function getOrder() {
        return MaderaFixtures::QUOTES_PROGRESS_STATUS_HISTORY;
    }
}