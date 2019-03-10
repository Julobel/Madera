<?php

namespace App\DataFixtures\QuotesFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Quotes\QuotesAdministrativeStateHistory;
use Doctrine\Common\Persistence\ObjectManager;

class LoadQuotesAdministrativeStateHistory extends MaderaFixtures {

    public function load(ObjectManager $manager) {

        $stateAdm1 = new QuotesAdministrativeStateHistory();
        $stateAdm1->setQuote($this->getReference('quotes-1'))
            ->setQuotesAdministrativeState($this->getReference(LoadQuotesAdministrativeState::BROUILLON))
            ->setDateApplication(\DateTime::createFromFormat('d/m/Y', '3/02/2019'));
        $manager ->persist($stateAdm1);

        $stateAdm2 = new QuotesAdministrativeStateHistory();
        $stateAdm2->setQuote($this->getReference('quotes-1'))
            ->setQuotesAdministrativeState($this->getReference(LoadQuotesAdministrativeState::ACCEPTE))
            ->setDateApplication(\DateTime::createFromFormat('d/m/Y', '4/02/2019'));
        $manager ->persist($stateAdm2);

        $stateAdm3 = new QuotesAdministrativeStateHistory();
        $stateAdm3->setQuote($this->getReference('quotes-1'))
            ->setQuotesAdministrativeState($this->getReference(LoadQuotesAdministrativeState::COMMANDE))
            ->setDateApplication(\DateTime::createFromFormat('d/m/Y', '5/02/2019'));
        $manager ->persist($stateAdm3);

        $stateAdm4 = new QuotesAdministrativeStateHistory();
        $stateAdm4->setQuote($this->getReference('quotes-1'))
            ->setQuotesAdministrativeState($this->getReference(LoadQuotesAdministrativeState::FACTURATION))
            ->setDateApplication(\DateTime::createFromFormat('d/m/Y', '7/02/2019'));
        $manager ->persist($stateAdm4);

        $manager->flush();

    }
    public function getOrder() {
        return MaderaFixtures::QUOTES_ADMINISTRATIVE_STATE_HISTORY;
    }
}