<?php

namespace App\DataFixtures\ActorFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Actor\ActorCommercial;
use Doctrine\Common\Persistence\ObjectManager;

class LoadActorCommercials extends MaderaFixtures
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $commercial = new ActorCommercial();
            $commercial->setFirstName('Prénom' . $i);
            $commercial->setLastName('Nom' . $i);
            $commercial->setEmail('clientMail' . $i . '@mail.fr');
            $commercial->setPhoneNUmber('060606060' . $i);

            $manager->persist($commercial);
            $this->addReference('commercial' . $i, $commercial);
        }
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return MaderaFixtures::ACTOR_COMMERCIAL;
    }
}