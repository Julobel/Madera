<?php

namespace App\DataFixtures\AccountingFixtures;

use App\DataFixtures\MaderaFixtures;
use App\Entity\Accounting\AccountingTVA;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAccountingTVAData extends MaderaFixtures{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {
        $tva196 = new AccountingTVA();
        $tva196->setLabel("19,6%")
            ->setValue(0.196)
            ->setApplicable(false);
        $manager ->persist($tva196);

        $tva20 = new AccountingTVA();
        $tva20->setLabel("20%")
            ->setValue(0.2)
            ->setApplicable(true);
        $manager ->persist($tva20);

        $manager->flush();

        $this->addReference('accounting-tva-196', $tva196);
        $this->addReference('accounting-tva-20', $tva20);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return MaderaFixtures::ACCOUNTING_TVA;
    }
}