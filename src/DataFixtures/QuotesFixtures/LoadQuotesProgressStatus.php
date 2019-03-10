<?php

namespace App\DataFixtures\QuotesFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Quotes\QuotesProgressStatus;
use Doctrine\Common\Persistence\ObjectManager;

class LoadProgressStatus extends MaderaFixtures {

    const SIGNATURE = 'state-signature';
    const PERMIS = 'state-permis';
    const CHANTIER = 'state-chantier';
    const FONDATIONS = 'state-fondations';
    const MURS = 'state-murs';
    const ETANCHE = 'state-etanche';
    const EQUIPEMENT = 'state-equipement';
    const CLES = 'state-cles';

    public function load(ObjectManager $manager) {
        $signature = new QuotesProgressStatus();
        $signature->setLabel('A la signature')
            ->setPercentagePayment(0.03);
        $manager ->persist($signature);
        $this->addReference(LoadProgressStatus::SIGNATURE, $signature);

        $permis = new QuotesProgressStatus();
        $permis->setLabel('Obtention du permis de construire')
            ->setPercentagePayment(0.1);
        $manager ->persist($permis);
        $this->addReference(LoadProgressStatus::PERMIS, $permis);

        $chantier = new QuotesProgressStatus();
        $chantier->setLabel('Ouverture du chantier')
            ->setPercentagePayment(0.15);
        $manager ->persist($chantier);
        $this->addReference(LoadProgressStatus::CHANTIER, $chantier);

        $fondations = new QuotesProgressStatus();
        $fondations->setLabel('Achèvement des fondations')
            ->setPercentagePayment(0.25);
        $manager ->persist($fondations);
        $this->addReference(LoadProgressStatus::FONDATIONS, $fondations);

        $murs = new QuotesProgressStatus();
        $murs->setLabel('Achèvement des murs')
            ->setPercentagePayment(0.40);
        $manager ->persist($murs);
        $this->addReference(LoadProgressStatus::MURS, $murs);

        $etancheite = new QuotesProgressStatus();
        $etancheite->setLabel('Mise hors d’eau/hors d’air')
            ->setPercentagePayment(0.75);
        $manager ->persist($etancheite);
        $this->addReference(LoadProgressStatus::ETANCHE, $etancheite);

        $equipement = new QuotesProgressStatus();
        $equipement->setLabel('Achèvement des travaux d’équipement')
            ->setPercentagePayment(0.95);
        $manager ->persist($equipement);
        $this->addReference(LoadProgressStatus::EQUIPEMENT, $equipement);

        $cles = new QuotesProgressStatus();
        $cles->setLabel('Remise des clés')
            ->setPercentagePayment(1);
        $manager ->persist($cles);
        $this->addReference(LoadProgressStatus::CLES, $cles);

        $manager->flush();
    }
    public function getOrder() {
        return MaderaFixtures::QUOTES_PROGRESS_STATUS;
    }
}