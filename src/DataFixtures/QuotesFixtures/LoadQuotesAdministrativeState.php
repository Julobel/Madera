<?php

namespace App\DataFixtures\QuotesFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Quotes\QuotesAdministrativeState;
use Doctrine\Common\Persistence\ObjectManager;

class LoadQuotesAdministrativeState extends MaderaFixtures {

    const BROUILLON = 'state-brouillon';
    const ATTENTE = 'state-attente';
    const ACCEPTE = 'state-accepte';
    const REFUSE = 'state-refuse';
    const COMMANDE = 'state-commande';
    const FACTURATION = 'state-facturation';

    public function load(ObjectManager $manager) {

        $brouillon = new QuotesAdministrativeState();
        $brouillon->setLabel('Brouillon');
        $manager ->persist($brouillon);
        $this->addReference(LoadQuotesAdministrativeState::BROUILLON, $brouillon);

        $attente = new QuotesAdministrativeState();
        $attente->setLabel('En Attente');
        $manager ->persist($attente);
        $this->addReference(LoadQuotesAdministrativeState::ATTENTE, $attente);

        $accepte = new QuotesAdministrativeState();
        $accepte->setLabel('Accepté');
        $manager ->persist($accepte);
        $this->addReference(LoadQuotesAdministrativeState::ACCEPTE, $accepte);

        $refuse = new QuotesAdministrativeState();
        $refuse->setLabel('Refusé');
        $manager ->persist($refuse);
        $this->addReference(LoadQuotesAdministrativeState::REFUSE, $refuse);

        $commande = new QuotesAdministrativeState();
        $commande->setLabel('En Commande');
        $manager ->persist($commande);
        $this->addReference(LoadQuotesAdministrativeState::COMMANDE, $commande);

        $facturation = new QuotesAdministrativeState();
        $facturation->setLabel('Transfert nn facturation');
        $manager ->persist($facturation);
        $this->addReference(LoadQuotesAdministrativeState::FACTURATION, $facturation);

        $manager->flush();
    }
    public function getOrder() {
        return MaderaFixtures::QUOTES_ADMINISTRATIVE_STATE;
    }
}