<?php
/**
 * Created by PhpStorm.
 * User: tangu
 * Date: 04/01/2016
 * Time: 08:24
 */

namespace CoreBundle\DataFixtures\ORM;


use CoreBundle\Entity\Chambre;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadChambre implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $chambres = [
            [
                'nom' => "LAC D'AVORIAZ",
                'numero' => 'E102',
                'capacite' => 5,
                'type' => Chambre::TYPE_ALUMNI,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LAC D'AYSE",
                'numero' => 'E103',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LAC BENI",
                'numero' => 'E104',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LAC BLANC",
                'numero' => 'E105',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LAC CAVETTAZ",
                'numero' => 'E106',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LAC CORNU",
                'numero' => 'E107',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => true,
                'balcon' => true,
            ],
            [
                'nom' => "LAC GAILLANDS",
                'numero' => 'E108',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => true,
                'balcon' => true,
            ],
            [
                'nom' => "LAC GRIS",
                'numero' => 'E109',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => true,
                'balcon' => true,
            ],
            [
                'nom' => "LAC ILETTES",
                'numero' => 'E110',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => true,
                'balcon' => true,
            ],
            [
                'nom' => "LAC PORMENAZ",
                'numero' => 'E111',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => true,
                'balcon' => true,
            ],
            [
                'nom' => "LAC VERT",
                'numero' => 'E112',
                'capacite' => 6,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => true,
                'balcon' => true,
            ],
            [
                'nom' => "AIGUILLES D'AYERES",
                'numero' => 'E201',
                'capacite' => 6,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "CHAPEAU GASPARD",
                'numero' => 'E202',
                'capacite' => 5,
                'type' => Chambre::TYPE_ALUMNI,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "CROIX DE FER",
                'numero' => 'E203',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "L'ENCLUME",
                'numero' => 'E204',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LES GRANDES PLATIÈRES",
                'numero' => 'E205',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LES JUMELLES",
                'numero' => 'E206',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "POINTE DE CHARBONNIE",
                'numero' => 'E207',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "POINTE DEROCHOIR",
                'numero' => 'E208',
                'capacite' => 4,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "POINTE PLATE",
                'numero' => 'E209',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "TÊTE À L'ÂNE",
                'numero' => 'E210',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "TÊTE DU COLONNE",
                'numero' => 'E211',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "TÊTE DES LINDARS",
                'numero' => 'E212',
                'capacite' => 6,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "L'ARLY",
                'numero' => 'E301',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "L'ARVE",
                'numero' => 'E302',
                'capacite' => 4,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LA BADIERE",
                'numero' => 'E303',
                'capacite' => 4,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LE BON NEANT",
                'numero' => 'E304',
                'capacite' => 4,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LE BREVON",
                'numero' => 'E305',
                'capacite' => 4,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LA DIOSAZ",
                'numero' => 'E306',
                'capacite' => 4,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LA FRASSE",
                'numero' => 'E307',
                'capacite' => 6,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LE GIFFRE",
                'numero' => 'E308',
                'capacite' => 4,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LA MENOGE",
                'numero' => 'E309',
                'capacite' => 4,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LE SOUAY",
                'numero' => 'E310',
                'capacite' => 4,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "L'UGINE",
                'numero' => 'E311',
                'capacite' => 4,
                'type' => Chambre::TYPE_STAFF,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LES USSES",
                'numero' => 'E312',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LES ARAVIS",
                'numero' => 'E401',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => false,
            ],
            [
                'nom' => "LES ARCES",
                'numero' => 'E402',
                'capacite' => 3,
                'type' => Chambre::TYPE_ALUMNI,
                'festive' => false,
                'balcon' => false,
            ],
            [
                'nom' => "LE BONHOMME",
                'numero' => 'E403',
                'capacite' => 3,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => false,
            ],
            [
                'nom' => "LA COLOMBERIE",
                'numero' => 'E404',
                'capacite' => 3,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => false,
            ],
            [
                'nom' => "LA CROIX FRY",
                'numero' => 'E405',
                'capacite' => 3,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => false,
            ],
            [
                'nom' => "L'ÉPINE",
                'numero' => 'E406',
                'capacite' => 3,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => false,
            ],
            [
                'nom' => "LE GÉANT",
                'numero' => 'E407',
                'capacite' => 4,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => false,
            ],
            [
                'nom' => "LE JOLY",
                'numero' => 'E408',
                'capacite' => 3,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => false,
            ],
            [
                'nom' => "LA JOUX VERTE",
                'numero' => 'E409',
                'capacite' => 3,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => false,
            ],
            [
                'nom' => "LES MONTETS",
                'numero' => 'E410',
                'capacite' => 3,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => false,
            ],
            [
                'nom' => "LES SAISIES",
                'numero' => 'E411',
                'capacite' => 3,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => false,
            ],
            [
                'nom' => "LE SAPENAY",
                'numero' => 'E412',
                'capacite' => 5,
                'type' => Chambre::TYPE_ETUDIANT,
                'festive' => false,
                'balcon' => false,
            ],
            [
                'nom' => "ARGENTIÈRE",
                'numero' => 'E501',
                'capacite' => 3,
                'type' => Chambre::TYPE_ADMIN,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "BIONNASSAY",
                'numero' => 'E502',
                'capacite' => 3,
                'type' => Chambre::TYPE_ADMIN,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LES BOSSONS",
                'numero' => 'E503',
                'capacite' => 3,
                'type' => Chambre::TYPE_ADMIN,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LESCHAUX",
                'numero' => 'E504',
                'capacite' => 3,
                'type' => Chambre::TYPE_ADMIN,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "MER DE GLACE",
                'numero' => 'E505',
                'capacite' => 3,
                'type' => Chambre::TYPE_ADMIN,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "MIAGE",
                'numero' => 'E506',
                'capacite' => 2,
                'type' => Chambre::TYPE_ADMIN,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "TACONNAZ",
                'numero' => 'E507',
                'capacite' => 2,
                'type' => Chambre::TYPE_ADMIN,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "TALEFRE",
                'numero' => 'E508',
                'capacite' => 2,
                'type' => Chambre::TYPE_ADMIN,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "LE TOUR",
                'numero' => 'E509',
                'capacite' => 2,
                'type' => Chambre::TYPE_ADMIN,
                'festive' => false,
                'balcon' => true,
            ],
            [
                'nom' => "TRÉ LA TÊTE",
                'numero' => 'E510',
                'capacite' => 3,
                'type' => Chambre::TYPE_ADMIN,
                'festive' => false,
                'balcon' => true,
            ],
        ];

        foreach ($chambres as $chambre) {
            $entity = new Chambre();
            $entity->setNom($chambre['nom']);
            $entity->setNumero($chambre['numero']);
            $entity->setCapacite($chambre['capacite']);
            $entity->setType($chambre['type']);
            $entity->setFestive($chambre['festive']);
            $entity->setBalcon($chambre['balcon']);

            $manager->persist($entity);
            $manager->flush();
        }
    }
}