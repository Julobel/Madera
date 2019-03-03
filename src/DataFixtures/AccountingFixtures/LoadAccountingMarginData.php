<?php
/**
 * Created by IntelliJ IDEA.
 * User: JB
 * Date: 03/03/2019
 * Time: 02:24
 */

namespace App\DataFixtures\AccountingFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Accounting\AccountingMargin;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAccountingMarginData extends MaderaFixtures{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager) {
        $ccialMargin = new AccountingMargin();
        $ccialMargin->setLabel("Marge Commercial");
        $manager ->persist($ccialMargin);

        $corpMargin = new AccountingMargin();
        $corpMargin->setLabel("Marge Entreprise");
        $manager ->persist($corpMargin);

        $manager->flush();

        $this->addReference('accounting-margin-commercial', $ccialMargin);
        $this->addReference('accounting-margin-corporation', $corpMargin);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder() {
        return MaderaFixtures::ACCOUNTING_MARGIN;
    }
}