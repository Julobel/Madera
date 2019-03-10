<?php
/**
 * Created by Jules Aubel
 * Date: 09/03/19
 */

namespace App\DataFixtures\ActorFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Actor\ActorClient;
use Doctrine\Common\Persistence\ObjectManager;

class LoadActorClients extends MaderaFixtures
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $client = new ActorClient();
            $client->setFirstName('Prénom' . $i);
            $client->setLastName('Nom' . $i);
            $client->setEmail('clientMail' . $i . '@mail.fr');
            $client->setCity('Bordeaux' . $i);
            $client->setPostalCode('3300' . $i);
            $client->setState('France' . $i);
            $client->setStreetNumber($i);
            $client->setAddress1('Rue de la république');
            $client->setAddress2('Batiment ' . $i);
            $client->setPhoneNumber('060606060' . $i);

            $manager->persist($client);

            $this->addReference('client' . $i, $client);
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
        return MaderaFixtures::ACTOR_CLIENT;
    }
}