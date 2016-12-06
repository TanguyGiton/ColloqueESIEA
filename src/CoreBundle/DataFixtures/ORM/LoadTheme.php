<?php
/**
 * Created by PhpStorm.
 * User: Tanguy
 * Date: 15/12/2015
 * Time: 05:08
 */

namespace CoreBundle\DataFixtures\ORM;


use CoreBundle\Entity\Theme;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadTheme implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $themes = [
            ['title' => 'Innovation', 'nbGroupes' => 9],
            ['title' => 'Entreprenariat', 'nbGroupes' => 9],
            ['title' => 'Vente', 'nbGroupes' => 9],
            ['title' => 'Conduite du changement', 'nbGroupes' => 9],
            ['title' => 'Réussir le numérique', 'nbGroupes' => 10],
        ];

        foreach ($themes as $theme) {
            $entity = new Theme();
            $entity->setTitle($theme['title']);
            $entity->setNbGroupes($theme['nbGroupes']);

            $manager->persist($entity);
            $manager->flush();
        }
    }
}