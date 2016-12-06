<?php

namespace CoreBundle\DataFixtures\ORM;

use CoreBundle\Entity\Activite;
use CoreBundle\Entity\PackActivites;
use DateTime;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPackActivites implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        $activites = [];
        $activites['igloo'] = new Activite('Construction d’igloo',
            "Tu t’es perdu en montagne et tu sens que tu vas devoir passer la nuit dehors ? Brrrrr… un igloo serait le bienvenue !<br>
Avec cette activité apprends à construire ton igloo de survie pour pouvoir survivre dans la montagne."
        );
        $activites['arva'] = new Activite('Recherche ARVA', "Prévois tes gants et ta tenue de ski et mets-toi dans la peau d’un sauveteur et pars à la recherche des perdus en montagne.");
        $activites['raquette'] = new Activite('Randonnée en raquettes', "Balade en raquettes");
        $activites['station'] = new Activite('Visite de la plaine de Joux', "Tu es futur ingénieur skieur ou snowboarder confirmé qui dévale la montagne à toute vitesse juste pour remonter au sommet ?<br>
Ou un futur ingénieur galérien sur le tire-fesses qui lutte contre la gravité pour ne pas tomber en perdant l’équilibre ?<br>
Viens voir la magie mécanique de ces remontées qui font ton bonheur ou ton
malheur… Découvre aussi la magie qui se cache derrière la production de neige artificielle. Petit défi : saurais-tu gérer une station de ski ?");
        $activites['reserve'] = new Activite('Maison de la réserve', "Les chats, les chiens et les poissons rouges c’est ton truc (ou pas), le parc à côté de chez toi tu le connais par cœur et les précieux géraniums de ta grand-mère tu sais t’en occuper mais connais-tu les animaux et les fleurs de la haute montagne ?<br>
Viens découvrir la faune et la flore de la région de la Haute-Savoie grâce à cette expositions où tu pourras voir ces animaux de près !");

        $packsActivites = [
            [
                'date' => new DateTime("2016-02-10"),
                'nbPlaces' => 24,
                'activite1' => $activites['igloo'],
                'activite2' => $activites['raquette']
            ],
            [
                'date' => new DateTime("2016-02-10"),
                'nbPlaces' => 24,
                'activite1' => $activites['igloo'],
                'activite2' => $activites['reserve']
            ],
            [
                'date' => new DateTime("2016-02-10"),
                'nbPlaces' => 24,
                'activite1' => $activites['arva'],
                'activite2' => $activites['raquette']
            ],
            [
                'date' => new DateTime("2016-02-10"),
                'nbPlaces' => 24,
                'activite1' => $activites['arva'],
                'activite2' => $activites['reserve']
            ],
            [
                'date' => new DateTime("2016-02-11"),
                'nbPlaces' => 24,
                'activite1' => $activites['igloo'],
                'activite2' => $activites['raquette']
            ],
            [
                'date' => new DateTime("2016-02-11"),
                'nbPlaces' => 24,
                'activite1' => $activites['igloo'],
                'activite2' => $activites['station']
            ],
            [
                'date' => new DateTime("2016-02-11"),
                'nbPlaces' => 24,
                'activite1' => $activites['arva'],
                'activite2' => $activites['raquette']
            ],
            [
                'date' => new DateTime("2016-02-11"),
                'nbPlaces' => 24,
                'activite1' => $activites['arva'],
                'activite2' => $activites['station']
            ]
        ];

        foreach ($packsActivites as $activite) {
            $entity = new PackActivites();
            $entity->setDate($activite['date']);
            $entity->setNbPlaces($activite['nbPlaces']);
            $entity->addActivite($activite['activite1']);
            $entity->addActivite($activite['activite2']);

            $manager->persist($entity);
            $manager->flush();
        }
    }
}