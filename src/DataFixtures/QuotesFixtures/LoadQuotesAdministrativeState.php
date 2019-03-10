<?php

namespace App\DataFixtures\QuotesFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Quotes\QuotesAdministrativeState;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAdministrativeState extends MaderaFixtures {

    const BROUILLON = 'state-brouillon';
    const ATTENTE = 'state-attente';
    const ACCEPTE = 'state-accepte';
    const REFUSE = 'state-refuse';
    const COMMANDE = 'state-commande';

    public function load(ObjectManager $manager) {

        $brouillon = new QuotesAdministrativeState();
        $brouillon->setLabel('Brouillon');
        $manager ->persist($brouillon);
        $this->addReference(LoadAdministrativeState::BROUILLON, $brouillon);

        $attente = new QuotesAdministrativeState();
        $attente->setLabel('En Attente');
        $manager ->persist($attente);
        $this->addReference(LoadAdministrativeState::ATTENTE, $attente);

        $accepte = new QuotesAdministrativeState();
        $accepte->setLabel('Accepté');
        $manager ->persist($accepte);
        $this->addReference(LoadAdministrativeState::ACCEPTE, $accepte);

        $refuse = new QuotesAdministrativeState();
        $refuse->setLabel('Refusé');
        $manager ->persist($refuse);
        $this->addReference(LoadAdministrativeState::REFUSE, $refuse);

        $commande = new QuotesAdministrativeState();
        $commande->setLabel('En Commande');
        $manager ->persist($commande);
        $this->addReference(LoadAdministrativeState::COMMANDE, $commande);
        
        $facturation = new QuotesAdministrativeState();
        $facturation->setLabel('En Commande');
        $manager ->persist($facturation);
        $this->addReference(LoadAdministrativeState::COMMANDE, $facturation);
        


        $manager->flush();
    }
    public function getOrder() {
        return MaderaFixtures::QUOTES_ADMINISTRATIVE_STATE;
    }
}