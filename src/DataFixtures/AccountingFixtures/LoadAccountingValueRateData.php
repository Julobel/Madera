<?php
/**
 * Created by IntelliJ IDEA.
 * User: JB
 * Date: 03/03/2019
 * Time: 03:39
 */

namespace App\DataFixtures\AccountingFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Accounting\AccountingValueRate;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAccountingValueRateData extends MaderaFixtures{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {
        $taux1 = new AccountingValueRate();
        $taux1->setValue(0.1)
            ->setStartDate(\DateTime::createFromFormat('d/m/Y', '1/01/2019'))
            ->setEndDate(\DateTime::createFromFormat('d/m/Y', '31/01/2019'))
            ->setMargin($this->getReference('accounting-margin-commercial'));
        $manager ->persist($taux1);

        $taux2 = new AccountingValueRate();
        $taux2->setValue(0.12)
            ->setStartDate(\DateTime::createFromFormat('d/m/Y', '1/01/2019'))
            ->setMargin($this->getReference('accounting-margin-commercial'));
        $manager ->persist($taux2);

        $taux3 = new AccountingValueRate();
        $taux3->setValue(0.25)
            ->setStartDate(\DateTime::createFromFormat('d/m/Y', '1/01/2019'))
            ->setEndDate(\DateTime::createFromFormat('d/m/Y', '31/01/2019'))
            ->setMargin($this->getReference('accounting-margin-corporation'));
        $manager ->persist($taux3);

        $taux4 = new AccountingValueRate();
        $taux4->setValue(0.30)
            ->setStartDate(\DateTime::createFromFormat('d/m/Y', '1/01/2019'))
            ->setMargin($this->getReference('accounting-margin-corporation'));
        $manager ->persist($taux4);

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return MaderaFixtures::ACCOUNTING_VALUE_RATE;
    }
}