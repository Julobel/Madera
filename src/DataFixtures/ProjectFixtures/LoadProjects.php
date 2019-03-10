<?php
/**
 * Created by Jules Aubel
 * Date: 10/03/19
 */

namespace App\DataFixtures\ProjectFixtures;


use App\DataFixtures\MaderaFixtures;
use App\Entity\Project\Project;
use Doctrine\Common\Persistence\ObjectManager;

class LoadProjects extends MaderaFixtures
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     * @throws \Exception
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $project = new Project();
            $project->setName('Nom projet ' . $i);
            $project->setDate(\DateTime::createFromFormat('d/m/Y', '2/02/201' . $i));
            $project->setActorClientId($this->getReference('client' . $i));

            $manager->persist($project);
            $this->addReference('project'.$i, $project);
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
        return MaderaFixtures::PROJECT;
    }
}