<?php
/**
 * Created by PhpStorm.
 * User: tangu
 * Date: 04/01/2016
 * Time: 08:24
 */

namespace CoreBundle\DataFixtures\ORM;


use CoreBundle\Entity\Bus;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadBus implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $bus = [
            [
                'campus' => Bus::CAMPUS_LAVAL,
                'capacite' => 51
            ],
            [
                'campus' => Bus::CAMPUS_PARIS,
                'capacite' => 51
            ],
            [
                'campus' => Bus::CAMPUS_PARIS,
                'capacite' => 57
            ],
            [
                'campus' => Bus::CAMPUS_PARIS,
                'capacite' => 57
            ]
        ];

        foreach ($bus as $onebus) {
            $entity = new Bus();
            $entity->setCampus($onebus['campus']);
            $entity->setCapacite($onebus['capacite']);

            $manager->persist($entity);
            $manager->flush();
        }
    }
}