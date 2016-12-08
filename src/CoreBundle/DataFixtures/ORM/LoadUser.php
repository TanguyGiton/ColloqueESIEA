<?php
/**
 * Created by PhpStorm.
 * User: Tanguy
 * Date: 15/12/2015
 * Time: 02:52
 */

namespace CoreBundle\DataFixtures\ORM;


use CoreBundle\Entity\Groupe;
use CoreBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUser implements FixtureInterface, ContainerAwareInterface
{

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $groupes = [];// tout déplacer d'un cran.. a faire
        $groupes[] = new Groupe(0,0);
        $groupes[] = new Groupe(1,4);
        $groupes[] = new Groupe(2,5);
        $groupes[] = new Groupe(3,4);
        $groupes[] = new Groupe(4,4);
        $groupes[] = new Groupe(5,4);//5
        $groupes[] = new Groupe(6,4);
        $groupes[] = new Groupe(7,4);
        $groupes[] = new Groupe(8,4);
        $groupes[] = new Groupe(9,6);
        $groupes[] = new Groupe(10,5);//10
        $groupes[] = new Groupe(11,4);
        $groupes[] = new Groupe(12,4);
        $groupes[] = new Groupe(13,5);
        $groupes[] = new Groupe(14,0);
        $groupes[] = new Groupe(15,6);//15
        $groupes[] = new Groupe(16,5);
        $groupes[] = new Groupe(17,4);
        $groupes[] = new Groupe(18,5);
        $groupes[] = new Groupe(19,4);
        $groupes[] = new Groupe(20,5);//20
        $groupes[] = new Groupe(21,6);
        $groupes[] = new Groupe(22,4);
        $groupes[] = new Groupe(23,5);
        $groupes[] = new Groupe(24,6);
        $groupes[] = new Groupe(25,5);//25
        $groupes[] = new Groupe(26,3);
        $groupes[] = new Groupe(27,3);
        $groupes[] = new Groupe(28,6);
        $groupes[] = new Groupe(29,0);
        $groupes[] = new Groupe(30,6);//30
        $groupes[] = new Groupe(31,0);
        $groupes[] = new Groupe(32,0);
        $groupes[] = new Groupe(33,5);
        $groupes[] = new Groupe(34,0);
        $groupes[] = new Groupe(35,5);//35
        $groupes[] = new Groupe(36,5);
        $groupes[] = new Groupe(37,0);
        $groupes[] = new Groupe(38,5);
        $groupes[] = new Groupe(39,6);
        $groupes[] = new Groupe(40,0);
        $groupes[] = new Groupe(41,4);
        $groupes[] = new Groupe(42,4);
        $groupes[] = new Groupe(43,4);
        $groupes[] = new Groupe(44,4);
        $groupes[] = new Groupe(45,4);
        $groupes[] = new Groupe(46,5);
        $groupes[] = new Groupe(47,6);
        $groupes[] = new Groupe(48,6);
        $groupes[] = new Groupe(49,7);
        $groupes[] = new Groupe(50,6);
        $groupes[] = new Groupe(51,6);
        $groupes[] = new Groupe(52,6);
        $groupes[] = new Groupe(53,6);

        $etudiants = [
            ['nom' => 'BERNARD', 'prenom' => 'Hippolyte', 'email' => 'hbernard@et.esiea.fr', 'groupe' => $groupes[1], 'campus' => 'L'],
            ['nom' => 'CHANELLIERE', 'prenom' => 'Lucas', 'email' => 'chanelliere@et.esiea.fr', 'groupe' => $groupes[1], 'campus' => 'L'],
            ['nom' => 'HERAULT', 'prenom' => 'Laurent', 'email' => 'herault@et.esiea.fr', 'groupe' => $groupes[1], 'campus' => 'L'],
            ['nom' => 'LECLERCQ', 'prenom' => 'Gaëtan', 'email' => 'leclercq@et.esiea.fr', 'groupe' => $groupes[1], 'campus' => 'L'],
            ['nom' => 'BEHESHTI', 'prenom' => 'Loïc', 'email' => 'beheshti@et.esiea.fr', 'groupe' => $groupes[2], 'campus' => 'L'],
            ['nom' => 'DEY', 'prenom' => 'Alexandre', 'email' => 'dey@et.esiea.fr', 'groupe' => $groupes[2], 'campus' => 'L'],
            ['nom' => 'HAMMAMI', 'prenom' => 'Sami', 'email' => 'hammami@et.esiea.fr', 'groupe' => $groupes[2], 'campus' => 'L'],
            ['nom' => 'JEANNAUD', 'prenom' => 'Quentin', 'email' => 'jeannaud@et.esiea.fr', 'groupe' => $groupes[2], 'campus' => 'L'],
            ['nom' => 'SIDO', 'prenom' => 'Marie-Kerguelen', 'email' => 'sido@et.esiea.fr', 'groupe' => $groupes[2], 'campus' => 'L'],
            ['nom' => 'DE VASSOIGNE', 'prenom' => 'Aymeric', 'email' => 'devassoigne@et.esiea.fr', 'groupe' => $groupes[3], 'campus' => 'L'],
            ['nom' => 'ECHEVERRIA', 'prenom' => 'Thomas', 'email' => 'echeverria@et.esiea.fr', 'groupe' => $groupes[3], 'campus' => 'L'],
            ['nom' => 'MINTSA ESSONO', 'prenom' => 'Rosalie Irma Doriane', 'email' => 'mintsaessono@et.esiea.fr', 'groupe' => $groupes[3], 'campus' => 'L'],
            ['nom' => 'POTTIER', 'prenom' => 'Kévin', 'email' => 'kpottier@et.esiea.fr', 'groupe' => $groupes[3], 'campus' => 'L'],
            ['nom' => 'CHARUEL', 'prenom' => 'Mickaël', 'email' => 'charuel@et.esiea.fr', 'groupe' => $groupes[4], 'campus' => 'L'],
            ['nom' => 'GUINET', 'prenom' => 'Kévin', 'email' => 'guinet@et.esiea.fr', 'groupe' => $groupes[4], 'campus' => 'L'],
            ['nom' => 'MAURO', 'prenom' => 'Caroline', 'email' => 'cmauro@et.esiea.fr', 'groupe' => $groupes[4], 'campus' => 'L'],
            ['nom' => 'RUISSEAU', 'prenom' => 'Adrien', 'email' => 'ruisseau@et.esiea.fr', 'groupe' => $groupes[4], 'campus' => 'L'],
            ['nom' => 'DUBUREAU', 'prenom' => 'Thomas', 'email' => 'dubureau@et.esiea.fr', 'groupe' => $groupes[5], 'campus' => 'L'],
            ['nom' => 'HENRY', 'prenom' => 'Maxime', 'email' => 'mhenry@et.esiea.fr', 'groupe' => $groupes[5], 'campus' => 'L'],
            ['nom' => 'KARAME', 'prenom' => 'Zahi', 'email' => 'karame@et.esiea.fr', 'groupe' => $groupes[5], 'campus' => 'L'],
            ['nom' => 'LEFAUX', 'prenom' => 'Bastien', 'email' => 'lefaux@et.esiea.fr', 'groupe' => $groupes[5], 'campus' => 'L'],
            ['nom' => 'BACHELEY', 'prenom' => 'Ambre', 'email' => 'bacheley@et.esiea.fr', 'groupe' => $groupes[6], 'campus' => 'L'],
            ['nom' => 'BONDUELLE', 'prenom' => 'Lucie', 'email' => 'bonduelle@et.esiea.fr', 'groupe' => $groupes[6], 'campus' => 'L'],
            ['nom' => 'CHESNEL', 'prenom' => 'Camille', 'email' => 'chesnel@et.esiea.fr', 'groupe' => $groupes[6], 'campus' => 'L'],
            ['nom' => 'LEBEE', 'prenom' => 'François', 'email' => 'lebee@et.esiea.fr', 'groupe' => $groupes[6], 'campus' => 'L'],
            ['nom' => 'BIMBOUTSA KOUMBA', 'prenom' => 'Worphy', 'email' => 'bimboutsakoumb@et.esiea.fr', 'groupe' => $groupes[7], 'campus' => 'L'],
            ['nom' => 'BOURRAHIM', 'prenom' => 'Hamza', 'email' => 'bourrahim@et.esiea.fr', 'groupe' => $groupes[7], 'campus' => 'L'],
            ['nom' => 'CHAMPENOIS', 'prenom' => 'Godeleine', 'email' => 'champenois@et.esiea.fr', 'groupe' => $groupes[7], 'campus' => 'L'],
            ['nom' => 'OBAME DE SOUMBOU MBWATH', 'prenom' => 'Ralph Steevens', 'email' => 'obamedesoumbou@et.esiea.fr', 'groupe' => $groupes[7], 'campus' => 'L'],
            ['nom' => 'CHAIRI', 'prenom' => 'Soufyane', 'email' => 'chairi@et.esiea.fr', 'groupe' => $groupes[8], 'campus' => 'L'],
            ['nom' => 'CORREGGIO', 'prenom' => 'Milan', 'email' => 'correggio@et.esiea.fr', 'groupe' => $groupes[8], 'campus' => 'L'],
            ['nom' => 'MIGUIAMA BAMBA', 'prenom' => 'Georf Harcherole', 'email' => 'miguiamabamba@et.esiea.fr', 'groupe' => $groupes[8], 'campus' => 'L'],
            ['nom' => 'TOGNETTI', 'prenom' => 'Martin', 'email' => 'tognetti@et.esiea.fr', 'groupe' => $groupes[8], 'campus' => 'L'],
            ['nom' => 'BERTHO', 'prenom' => 'Emmanuel', 'email' => 'bertho@et.esiea.fr', 'groupe' => $groupes[9], 'campus' => 'L'],
            ['nom' => 'BOUAOUINA', 'prenom' => 'Slim', 'email' => 'bouaouina@et.esiea.fr', 'groupe' => $groupes[9], 'campus' => 'L'],
            ['nom' => 'CORTELLA', 'prenom' => 'Nicolas', 'email' => 'cortella@et.esiea.fr', 'groupe' => $groupes[9], 'campus' => 'L'],
            ['nom' => 'FORGET', 'prenom' => 'Maxence', 'email' => 'forget@et.esiea.fr', 'groupe' => $groupes[9], 'campus' => 'L'],
            ['nom' => 'GIFFARD', 'prenom' => 'Lucas', 'email' => 'giffard@et.esiea.fr', 'groupe' => $groupes[9], 'campus' => 'L'],
            ['nom' => 'HUGON', 'prenom' => 'Matthieu', 'email' => 'hugon@et.esiea.fr', 'groupe' => $groupes[9], 'campus' => 'L'],
            ['nom' => 'ALTORFFER', 'prenom' => 'Antoine', 'email' => 'altorffer@et.esiea.fr', 'groupe' => $groupes[10], 'campus' => 'L'],
            ['nom' => 'COPPIN', 'prenom' => 'Cédric', 'email' => 'coppin@et.esiea.fr', 'groupe' => $groupes[10], 'campus' => 'L'],
            ['nom' => 'LAURENT', 'prenom' => 'Benjamin', 'email' => 'blaurent@et.esiea.fr', 'groupe' => $groupes[10], 'campus' => 'L'],
            ['nom' => 'MANGA', 'prenom' => 'Thefeine', 'email' => 'tmanga@et.esiea.fr', 'groupe' => $groupes[10], 'campus' => 'L'],
            ['nom' => 'PEIGNÉ', 'prenom' => 'Colin', 'email' => 'peigne@et.esiea.fr', 'groupe' => $groupes[10], 'campus' => 'L'],
            ['nom' => 'CODDET', 'prenom' => 'Clément', 'email' => 'coddet@et.esiea.fr', 'groupe' => $groupes[11], 'campus' => 'L'],
            ['nom' => 'DELONG', 'prenom' => 'Maxence', 'email' => 'delong@et.esiea.fr', 'groupe' => $groupes[11], 'campus' => 'L'],
            ['nom' => 'FATOU', 'prenom' => 'Olivier', 'email' => 'fatou@et.esiea.fr', 'groupe' => $groupes[11], 'campus' => 'L'],
            ['nom' => 'SUHARD', 'prenom' => 'Clément', 'email' => 'suhard@et.esiea.fr', 'groupe' => $groupes[11], 'campus' => 'L'],
            ['nom' => 'EBOLO BILE', 'prenom' => 'Frédérick-Henry', 'email' => 'ebolobile@et.esiea.fr', 'groupe' => $groupes[12], 'campus' => 'L'],
            ['nom' => 'FONTVIELLE', 'prenom' => 'Alexis', 'email' => 'fontvielle@et.esiea.fr', 'groupe' => $groupes[12], 'campus' => 'L'],
            ['nom' => 'HUET', 'prenom' => 'Robin', 'email' => 'roohuet@et.esiea.fr', 'groupe' => $groupes[12], 'campus' => 'L'],
            ['nom' => 'ROULIN', 'prenom' => 'Clément', 'email' => 'roulin@et.esiea.fr', 'groupe' => $groupes[12], 'campus' => 'L'],
            ['nom' => 'FERRE', 'prenom' => 'Robin', 'email' => 'ferre@et.esiea.fr', 'groupe' => $groupes[13], 'campus' => 'L'],
            ['nom' => 'LALLEMAND', 'prenom' => 'Bertrand', 'email' => 'lallemand@et.esiea.fr', 'groupe' => $groupes[13], 'campus' => 'L'],
            ['nom' => 'LE CAM', 'prenom' => 'Mathieu', 'email' => 'lecam@et.esiea.fr', 'groupe' => $groupes[13], 'campus' => 'L'],
            ['nom' => 'PRISER', 'prenom' => 'Axel', 'email' => 'priser@et.esiea.fr', 'groupe' => $groupes[13], 'campus' => 'L'],
            ['nom' => 'VILLE', 'prenom' => 'Thomas', 'email' => 'ville@et.esiea.fr', 'groupe' => $groupes[13], 'campus' => 'L'],
            ['nom' => 'COHEN-SOLAL', 'prenom' => 'Samuel', 'email' => 'cohen-solal@et.esiea.fr', 'groupe' => $groupes[15], 'campus' => 'P'],
            ['nom' => 'ELAYATHAMBY', 'prenom' => 'Ajanthan', 'email' => 'elayathamby@et.esiea.fr', 'groupe' => $groupes[15], 'campus' => 'P'],
            ['nom' => 'GAUTHIER', 'prenom' => 'Maxime', 'email' => 'gauthier@et.esiea.fr', 'groupe' => $groupes[15], 'campus' => 'P'],
            ['nom' => 'LAWANI', 'prenom' => 'Najim Ulrich', 'email' => 'lawani@et.esiea.fr', 'groupe' => $groupes[15], 'campus' => 'P'],
            ['nom' => 'RATEAU', 'prenom' => 'Julien', 'email' => 'jrateau@et.esiea.fr', 'groupe' => $groupes[15], 'campus' => 'P'],
            ['nom' => 'CARON', 'prenom' => 'Nathan', 'email' => 'ncaron@et.esiea.fr', 'groupe' => $groupes[16], 'campus' => 'P'],
            ['nom' => 'DEBOUT', 'prenom' => 'Guillaume', 'email' => 'debout@et.esiea.fr', 'groupe' => $groupes[16], 'campus' => 'P'],
            ['nom' => 'NAUDET', 'prenom' => 'Olivier', 'email' => 'naudet@et.esiea.fr', 'groupe' => $groupes[16], 'campus' => 'P'],
            ['nom' => 'RAVI', 'prenom' => 'Mathan', 'email' => 'ravi@et.esiea.fr', 'groupe' => $groupes[16], 'campus' => 'P'],
            ['nom' => 'XIE', 'prenom' => 'Jacques', 'email' => 'xie@et.esiea.fr', 'groupe' => $groupes[16], 'campus' => 'P'],
            ['nom' => 'FERREIRA', 'prenom' => 'Alexandre', 'email' => 'aferreira@et.esiea.fr', 'groupe' => $groupes[17], 'campus' => 'P'],
            ['nom' => 'FINEL-BACHA', 'prenom' => 'Dorian', 'email' => 'finel-bacha@et.esiea.fr', 'groupe' => $groupes[17], 'campus' => 'P'],
            ['nom' => 'PIRIOU', 'prenom' => 'Arnaud', 'email' => 'piriou@et.esiea.fr', 'groupe' => $groupes[17], 'campus' => 'P'],
            ['nom' => 'PRADDAUDE', 'prenom' => 'Martin', 'email' => 'praddaude@et.esiea.fr', 'groupe' => $groupes[17], 'campus' => 'P'],
            ['nom' => 'VALOT', 'prenom' => 'Franck', 'email' => 'valot@et.esiea.fr', 'groupe' => $groupes[17], 'campus' => 'P'],
            ['nom' => 'COSSON', 'prenom' => 'Florent', 'email' => 'cosson@et.esiea.fr', 'groupe' => $groupes[18], 'campus' => 'P'],
            ['nom' => 'DE LINGUA DE SAINT BLANQUAT', 'prenom' => 'Auxane', 'email' => 'delinguadesain@et.esiea.fr', 'groupe' => $groupes[18], 'campus' => 'P'],
            ['nom' => 'HAYOTTE', 'prenom' => 'Adrien', 'email' => 'hayotte@et.esiea.fr', 'groupe' => $groupes[18], 'campus' => 'P'],
            ['nom' => 'RANAIVO', 'prenom' => 'Kevin', 'email' => 'ranaivo@et.esiea.fr', 'groupe' => $groupes[18], 'campus' => 'P'],
            ['nom' => 'RÉMY', 'prenom' => 'Nora', 'email' => 'nremy@et.esiea.fr', 'groupe' => $groupes[18], 'campus' => 'P'],
            ['nom' => 'MICHEL', 'prenom' => 'Guillaume', 'email' => 'gmichel@et.esiea.fr', 'groupe' => $groupes[19], 'campus' => 'P'],
            ['nom' => 'NUEILATI', 'prenom' => 'Sami', 'email' => 'nueilati@et.esiea.fr', 'groupe' => $groupes[19], 'campus' => 'P'],
            ['nom' => 'RAFIDINARIVO', 'prenom' => 'Alexandre', 'email' => 'rafidinarivo@et.esiea.fr', 'groupe' => $groupes[19], 'campus' => 'P'],
            ['nom' => 'SAADA', 'prenom' => 'Yoav', 'email' => 'saada@et.esiea.fr', 'groupe' => $groupes[19], 'campus' => 'P'],
            ['nom' => 'AHINGORA', 'prenom' => 'Loïc Wilfried', 'email' => 'ahingora@et.esiea.fr', 'groupe' => $groupes[20], 'campus' => 'P'],
            ['nom' => 'GIRARD', 'prenom' => 'Irwin', 'email' => 'igirard@et.esiea.fr', 'groupe' => $groupes[20], 'campus' => 'P'],
            ['nom' => 'LEBORGNE', 'prenom' => 'Thiebaud', 'email' => 'leborgne@et.esiea.fr', 'groupe' => $groupes[20], 'campus' => 'P'],
            ['nom' => 'NOURBY COVINDIN', 'prenom' => 'Kishore', 'email' => 'nourbycovindin@et.esiea.fr', 'groupe' => $groupes[20], 'campus' => 'P'],
            ['nom' => 'PINCHON', 'prenom' => 'Pierre', 'email' => 'pinchon@et.esiea.fr', 'groupe' => $groupes[20], 'campus' => 'P'],
            ['nom' => 'AROUNASSALAME', 'prenom' => 'Sundar', 'email' => 'arounassalame@et.esiea.fr', 'groupe' => $groupes[21], 'campus' => 'P'],
            ['nom' => 'AY', 'prenom' => 'Bahri', 'email' => 'ay@et.esiea.fr', 'groupe' => $groupes[21], 'campus' => 'P'],
            ['nom' => 'LAURENT', 'prenom' => 'Fabrice', 'email' => 'flaurent@et.esiea.fr', 'groupe' => $groupes[21], 'campus' => 'P'],
            ['nom' => 'NADESWARAN', 'prenom' => 'Anushan', 'email' => 'nadeswaran@et.esiea.fr', 'groupe' => $groupes[21], 'campus' => 'P'],
            ['nom' => 'RABARISOA', 'prenom' => 'Andrianina', 'email' => 'rabarisoa@et.esiea.fr', 'groupe' => $groupes[21], 'campus' => 'P'],
            ['nom' => 'RANJALAHY', 'prenom' => 'Arimino Aina Landry', 'email' => 'ranjalahy@et.esiea.fr', 'groupe' => $groupes[21], 'campus' => 'P'],
            ['nom' => 'DAMASE', 'prenom' => 'Aymeric', 'email' => 'damase@et.esiea.fr', 'groupe' => $groupes[22], 'campus' => 'P'],
            ['nom' => 'LIU', 'prenom' => 'Kevin', 'email' => 'kliu@et.esiea.fr', 'groupe' => $groupes[22], 'campus' => 'P'],
            ['nom' => 'RAJAONA DAKA', 'prenom' => 'Timothée', 'email' => 'rajaonadaka@et.esiea.fr', 'groupe' => $groupes[22], 'campus' => 'P'],
            ['nom' => 'REVOIL', 'prenom' => 'Marc', 'email' => 'revoil@et.esiea.fr', 'groupe' => $groupes[22], 'campus' => 'P'],
            ['nom' => 'WONG', 'prenom' => 'Gallien', 'email' => 'gwong@et.esiea.fr', 'groupe' => $groupes[22], 'campus' => 'P'],
            ['nom' => 'BENEDETTI', 'prenom' => 'Léonard', 'email' => 'benedetti@et.esiea.fr', 'groupe' => $groupes[23], 'campus' => 'P'],
            ['nom' => 'GARNIER', 'prenom' => 'Joris', 'email' => 'garnier@et.esiea.fr', 'groupe' => $groupes[23], 'campus' => 'P'],
            ['nom' => 'LEPAIN', 'prenom' => 'Alexis', 'email' => 'lepain@et.esiea.fr', 'groupe' => $groupes[23], 'campus' => 'P'],
            ['nom' => 'REBOT', 'prenom' => 'Ilan', 'email' => 'rebot@et.esiea.fr', 'groupe' => $groupes[23], 'campus' => 'P'],
            ['nom' => 'SPIR', 'prenom' => 'Emile-Hugo', 'email' => 'spir@et.esiea.fr', 'groupe' => $groupes[23], 'campus' => 'P'],
            ['nom' => 'SEIF EL NASSER', 'prenom' => 'Ahmed', 'email' => 'seifelnasser@et.esiea.fr', 'groupe' => $groupes[24], 'campus' => 'P'],
            ['nom' => 'CHEBBI', 'prenom' => 'Ines', 'email' => 'chebbi@et.esiea.fr', 'groupe' => $groupes[24], 'campus' => 'I'],
            ['nom' => 'KISEBWE', 'prenom' => 'Hugo-Moïse', 'email' => 'kisebwe@et.esiea.fr', 'groupe' => $groupes[24], 'campus' => 'I'],
            ['nom' => 'LINDENEHER', 'prenom' => 'Clément', 'email' => 'lindeneher@et.esiea.fr', 'groupe' => $groupes[24], 'campus' => 'I'],
            ['nom' => 'PAULOIN', 'prenom' => 'Maxime', 'email' => 'pauloin@et.esiea.fr', 'groupe' => $groupes[24], 'campus' => 'I'],
            ['nom' => 'PINHO-LOPES', 'prenom' => 'Brandon', 'email' => 'lopes-pinho@et.esiea.fr', 'groupe' => $groupes[24], 'campus' => 'I'],
            ['nom' => 'CHEN', 'prenom' => 'Cheng', 'email' => 'cchen@et.esiea.fr', 'groupe' => $groupes[25], 'campus' => 'P'],
            ['nom' => 'CHETTO', 'prenom' => 'Rida', 'email' => 'chetto@et.esiea.fr', 'groupe' => $groupes[25], 'campus' => 'P'],
            ['nom' => 'HATTOUM', 'prenom' => 'Massiva Lounis', 'email' => 'hattoum@et.esiea.fr', 'groupe' => $groupes[25], 'campus' => 'P'],
            ['nom' => 'HAVET', 'prenom' => 'Louis', 'email' => 'havet@et.esiea.fr', 'groupe' => $groupes[25], 'campus' => 'P'],
            ['nom' => 'OULMAS', 'prenom' => 'Mourad', 'email' => 'oulmas@et.esiea.fr', 'groupe' => $groupes[25], 'campus' => 'P'],
            ['nom' => 'DANIERE', 'prenom' => 'Clément', 'email' => 'daniere@et.esiea.fr', 'groupe' => $groupes[26], 'campus' => 'P'],
            ['nom' => 'GNONDOLI', 'prenom' => 'Pila N´Na', 'email' => 'gnondoli@et.esiea.fr', 'groupe' => $groupes[26], 'campus' => 'P'],
            ['nom' => 'SCHEFFER', 'prenom' => 'Vincent', 'email' => 'scheffer@et.esiea.fr', 'groupe' => $groupes[26], 'campus' => 'I'],
            ['nom' => 'BRESSON', 'prenom' => 'Jérémy', 'email' => 'bresson@et.esiea.fr', 'groupe' => $groupes[27], 'campus' => 'P'],
            ['nom' => 'ROS', 'prenom' => 'Jean-Charles', 'email' => 'ros@et.esiea.fr', 'groupe' => $groupes[27], 'campus' => 'P'],
            ['nom' => 'CARON', 'prenom' => 'Flavien', 'email' => 'fcaron@et.esiea.fr', 'groupe' => $groupes[27], 'campus' => 'I'],
            ['nom' => 'ABERLEN', 'prenom' => 'Aurellien', 'email' => 'aberlen@et.esiea.fr', 'groupe' => $groupes[28], 'campus' => 'P'],
            ['nom' => 'BARRON', 'prenom' => 'Jérémy', 'email' => 'barron@et.esiea.fr', 'groupe' => $groupes[28], 'campus' => 'P'],
            ['nom' => 'BRIDOUX', 'prenom' => 'Clara', 'email' => 'bridoux@et.esiea.fr', 'groupe' => $groupes[28], 'campus' => 'P'],
            ['nom' => 'LAPIN', 'prenom' => 'Audrine', 'email' => 'lapin@et.esiea.fr', 'groupe' => $groupes[28], 'campus' => 'P'],
            ['nom' => 'VALNET', 'prenom' => 'Alina', 'email' => 'bordei@et.esiea.fr', 'groupe' => $groupes[28], 'campus' => 'P'],
            ['nom' => 'YANDO KAMGA', 'prenom' => 'Hugues', 'email' => 'yando@et.esiea.fr', 'groupe' => $groupes[28], 'campus' => 'P'],
            ['nom' => 'BEAULIEU', 'prenom' => 'Arthur', 'email' => 'abeaulieu@et.esiea.fr', 'groupe' => $groupes[30], 'campus' => 'I'],
            ['nom' => 'DONADIEU DE LAVIT', 'prenom' => 'Pierre-Balthazar', 'email' => 'donadieudelavi@et.esiea.fr', 'groupe' => $groupes[30], 'campus' => 'I'],
            ['nom' => 'GILLES', 'prenom' => 'Vincent', 'email' => 'vgilles@et.esiea.fr', 'groupe' => $groupes[30], 'campus' => 'I'],
            ['nom' => 'LE', 'prenom' => 'Grégory', 'email' => 'le@et.esiea.fr', 'groupe' => $groupes[30], 'campus' => 'I'],
            ['nom' => 'MOURET', 'prenom' => 'Valentin', 'email' => 'vmouret@et.esiea.fr', 'groupe' => $groupes[30], 'campus' => 'I'],
            ['nom' => 'VIGNAT', 'prenom' => 'Armand', 'email' => 'vignat@et.esiea.fr', 'groupe' => $groupes[30], 'campus' => 'I'],
            ['nom' => 'BRAINVILLE', 'prenom' => 'Arthur', 'email' => 'brainville@et.esiea.fr', 'groupe' => $groupes[33], 'campus' => 'P'],
            ['nom' => 'HIEZELY', 'prenom' => 'Charles', 'email' => 'hiezely@et.esiea.fr', 'groupe' => $groupes[33], 'campus' => 'P'],
            ['nom' => 'ROPELEWSKI', 'prenom' => 'Maxime', 'email' => 'ropelewski@et.esiea.fr', 'groupe' => $groupes[33], 'campus' => 'P'],
            ['nom' => 'FRUGIER', 'prenom' => 'Damien', 'email' => 'frugier@et.esiea.fr', 'groupe' => $groupes[33], 'campus' => 'I'],
            ['nom' => 'RICHARD', 'prenom' => 'Simon', 'email' => 'srichard@et.esiea.fr', 'groupe' => $groupes[33], 'campus' => 'I'],
            ['nom' => 'AMYOT', 'prenom' => 'Édouard', 'email' => 'amyot@et.esiea.fr', 'groupe' => $groupes[36], 'campus' => 'P'],
            ['nom' => 'DO', 'prenom' => 'Alex', 'email' => 'do@et.esiea.fr', 'groupe' => $groupes[36], 'campus' => 'P'],
            ['nom' => 'MICHEL', 'prenom' => 'Christophe', 'email' => 'chmichel@et.esiea.fr', 'groupe' => $groupes[36], 'campus' => 'P'],
            ['nom' => 'POINSIGNON', 'prenom' => 'Daniel', 'email' => 'poinsignon@et.esiea.fr', 'groupe' => $groupes[36], 'campus' => 'P'],
            ['nom' => 'TEISSIER', 'prenom' => 'Cannelle', 'email' => 'teissier@et.esiea.fr', 'groupe' => $groupes[36], 'campus' => 'P'],
            ['nom' => 'BOUIDA', 'prenom' => 'Mehdy', 'email' => 'bouida@et.esiea.fr', 'groupe' => $groupes[38], 'campus' => 'P'],
            ['nom' => 'COROLUS', 'prenom' => 'Aurélie', 'email' => 'corolus@et.esiea.fr', 'groupe' => $groupes[38], 'campus' => 'P'],
            ['nom' => 'GUIRASSY', 'prenom' => 'Mamadoulamine', 'email' => 'guirassy@et.esiea.fr', 'groupe' => $groupes[38], 'campus' => 'P'],
            ['nom' => 'HARCHI', 'prenom' => 'Camil', 'email' => 'harchi@et.esiea.fr', 'groupe' => $groupes[38], 'campus' => 'P'],
            ['nom' => 'JUMA', 'prenom' => 'Kévin', 'email' => 'kjuma@et.esiea.fr', 'groupe' => $groupes[38], 'campus' => 'P'],
            ['nom' => 'PUIG', 'prenom' => 'Etienne', 'email' => 'puig@et.esiea.fr', 'groupe' => $groupes[39], 'campus' => 'P'],
            ['nom' => 'ROJO', 'prenom' => 'Martin', 'email' => 'mrojo@et.esiea.fr', 'groupe' => $groupes[39], 'campus' => 'P'],
            ['nom' => 'ROJO', 'prenom' => 'Sylvain', 'email' => 'rojo@et.esiea.fr', 'groupe' => $groupes[39], 'campus' => 'P'],
            ['nom' => 'FALEMPIN', 'prenom' => 'Charlotte', 'email' => 'falempin@et.esiea.fr', 'groupe' => $groupes[39], 'campus' => 'I'],
            ['nom' => 'MAZARD', 'prenom' => 'Quentin', 'email' => 'mazard@et.esiea.fr', 'groupe' => $groupes[39], 'campus' => 'I'],
            ['nom' => 'NICOLAS-NELSON', 'prenom' => 'Brian', 'email' => 'nicolas-nelson@et.esiea.fr', 'groupe' => $groupes[39], 'campus' => 'I'],
            ['nom' => 'ADRIEN', 'prenom' => 'Eunice-Paule', 'email' => 'eadrien@et.esiea.fr', 'groupe' => $groupes[41], 'campus' => 'I'],
            ['nom' => 'CHARAVIT', 'prenom' => 'Stéphane', 'email' => 'charavit@et.esiea.fr', 'groupe' => $groupes[41], 'campus' => 'I'],
            ['nom' => 'SAZADALY', 'prenom' => 'Maxime', 'email' => 'sazadaly@et.esiea.fr', 'groupe' => $groupes[41], 'campus' => 'I'],
            ['nom' => 'VIARD', 'prenom' => 'Clémence', 'email' => 'cviard@et.esiea.fr', 'groupe' => $groupes[41], 'campus' => 'I'],
            ['nom' => 'COUTURIER', 'prenom' => 'Corentin', 'email' => 'ccouturier@et.esiea.fr', 'groupe' => $groupes[42], 'campus' => 'P'],
            ['nom' => 'BOUNIOL', 'prenom' => 'Pierre', 'email' => 'pbouniol@et.esiea.fr', 'groupe' => $groupes[42], 'campus' => 'I'],
            ['nom' => 'PEIRO', 'prenom' => 'Valentin', 'email' => 'peiro@et.esiea.fr', 'groupe' => $groupes[42], 'campus' => 'I'],
            ['nom' => 'PHAM LE', 'prenom' => 'Kévin', 'email' => 'phamle@et.esiea.fr', 'groupe' => $groupes[42], 'campus' => 'I'],
            ['nom' => 'CHHUON', 'prenom' => 'Thierry', 'email' => 'chhuon@et.esiea.fr', 'groupe' => $groupes[43], 'campus' => 'P'],
            ['nom' => 'GITON', 'prenom' => 'Tanguy', 'email' => 'giton@et.esiea.fr', 'groupe' => $groupes[43], 'campus' => 'P'],
            ['nom' => 'JACHIMSKI', 'prenom' => 'Thomas', 'email' => 'jachimski@et.esiea.fr', 'groupe' => $groupes[43], 'campus' => 'P'],
            ['nom' => 'TRIPOLI', 'prenom' => 'Enzo', 'email' => 'tripoli@et.esiea.fr', 'groupe' => $groupes[43], 'campus' => 'P'],
            ['nom' => 'KOUKI AMRI', 'prenom' => 'Sarra', 'email' => 'koukiamri@et.esiea.fr', 'groupe' => $groupes[44], 'campus' => 'P'],
            ['nom' => 'SBOUI', 'prenom' => 'Nour', 'email' => 'sboui@et.esiea.fr', 'groupe' => $groupes[44], 'campus' => 'P'],
            ['nom' => 'TANICH', 'prenom' => 'Sabri', 'email' => 'tanich@et.esiea.fr', 'groupe' => $groupes[44], 'campus' => 'P'],
            ['nom' => 'RANAIS ADRIAN', 'prenom' => 'Raphaël', 'email' => 'ranaisadrian@et.esiea.fr', 'groupe' => $groupes[44], 'campus' => 'I'],
            ['nom' => 'MEHRENBERGER', 'prenom' => 'Pierre', 'email' => 'mehrenberger@et.esiea.fr', 'groupe' => $groupes[45], 'campus' => 'P'],
            ['nom' => 'NEDELEC', 'prenom' => 'Ulysse', 'email' => 'unedelec@et.esiea.fr', 'groupe' => $groupes[45], 'campus' => 'P'],
            ['nom' => 'SIDOLI', 'prenom' => 'Raphael', 'email' => 'sidoli@et.esiea.fr', 'groupe' => $groupes[45], 'campus' => 'P'],
            ['nom' => 'LAZO LA TORRE', 'prenom' => 'Marc', 'email' => 'lazolatorre@et.esiea.fr', 'groupe' => $groupes[45], 'campus' => 'I'],
            ['nom' => 'MYARA', 'prenom' => 'Jérémie', 'email' => 'myara@et.esiea.fr', 'groupe' => $groupes[46], 'campus' => 'P'],
            ['nom' => 'PASCOLO', 'prenom' => 'Rémi', 'email' => 'pascolo@et.esiea.fr', 'groupe' => $groupes[46], 'campus' => 'P'],
            ['nom' => 'RONDOT', 'prenom' => 'Romain', 'email' => 'rondot@et.esiea.fr', 'groupe' => $groupes[46], 'campus' => 'P'],
            ['nom' => 'SQALLI HOUSSAINI', 'prenom' => 'Mamoun', 'email' => 'sqallihoussain@et.esiea.fr', 'groupe' => $groupes[46], 'campus' => 'P'],
            ['nom' => 'FEHRI', 'prenom' => 'Iheb', 'email' => 'fehri@et.esiea.fr', 'groupe' => $groupes[46], 'campus' => 'I'],
            ['nom' => 'AMBASSA', 'prenom' => 'Charles Landry', 'email' => 'cambassa@et.esiea.fr', 'groupe' => $groupes[47], 'campus' => 'U'],
            ['nom' => 'BEHRA', 'prenom' => 'Maxence', 'email' => 'behra@et.esiea.fr', 'groupe' => $groupes[47], 'campus' => 'U'],
            ['nom' => 'MASY', 'prenom' => 'Gaspard', 'email' => 'masy@et.esiea.fr', 'groupe' => $groupes[47], 'campus' => 'U'],
            ['nom' => 'MIERZYNSKI', 'prenom' => 'Thibaut', 'email' => 'mierzynski@et.esiea.fr', 'groupe' => $groupes[47], 'campus' => 'U'],
            ['nom' => 'TASSEVIL', 'prenom' => 'Tony', 'email' => 'tassevil@et.esiea.fr', 'groupe' => $groupes[47], 'campus' => 'U'],
            ['nom' => 'WALIKANNAGAE', 'prenom' => 'Sheron', 'email' => 'walikannagae@et.esiea.fr', 'groupe' => $groupes[47], 'campus' => 'U'],
            ['nom' => 'AYUB', 'prenom' => 'Talha', 'email' => 'ayub@et.esiea.fr', 'groupe' => $groupes[48], 'campus' => 'U'],
            ['nom' => 'BOULNOIS', 'prenom' => 'Pierre-Marie', 'email' => 'boulnois@et.esiea.fr', 'groupe' => $groupes[48], 'campus' => 'U'],
            ['nom' => 'ELOUERDI', 'prenom' => 'Ali', 'email' => 'elouerdi@et.esiea.fr', 'groupe' => $groupes[48], 'campus' => 'U'],
            ['nom' => 'SADAOUI', 'prenom' => 'Swann', 'email' => 'sadaoui@et.esiea.fr', 'groupe' => $groupes[48], 'campus' => 'U'],
            ['nom' => 'SEDIRI', 'prenom' => 'Yacine', 'email' => 'sediri@et.esiea.fr', 'groupe' => $groupes[48], 'campus' => 'U'],
            ['nom' => 'ZINNA', 'prenom' => 'Mougamadou Imaran', 'email' => 'zinna@et.esiea.fr', 'groupe' => $groupes[48], 'campus' => 'U'],
            ['nom' => 'BRUN', 'prenom' => 'Jean-Baptiste', 'email' => 'brun@et.esiea.fr', 'groupe' => $groupes[49], 'campus' => 'U'],
            ['nom' => 'CAGNON', 'prenom' => 'Charles', 'email' => 'cagnon@et.esiea.fr', 'groupe' => $groupes[49], 'campus' => 'U'],
            ['nom' => 'FOUCHER', 'prenom' => 'Théo', 'email' => 'tfoucher@et.esiea.fr', 'groupe' => $groupes[49], 'campus' => 'U'],
            ['nom' => 'HUE', 'prenom' => 'Nathan', 'email' => 'hue@et.esiea.fr', 'groupe' => $groupes[49], 'campus' => 'U'],
            ['nom' => 'MARTIN', 'prenom' => 'Pierre', 'email' => 'pmartin@et.esiea.fr', 'groupe' => $groupes[49], 'campus' => 'U'],
            ['nom' => 'NICOLAS', 'prenom' => 'Bastien', 'email' => 'bnicolas@et.esiea.fr', 'groupe' => $groupes[49], 'campus' => 'U'],
            ['nom' => 'RABY', 'prenom' => 'Pierre', 'email' => 'raby@et.esiea.fr', 'groupe' => $groupes[49], 'campus' => 'U'],
            ['nom' => 'BOUTHOUKINE', 'prenom' => 'Ayoub', 'email' => 'bouthoukine@et.esiea.fr', 'groupe' => $groupes[50], 'campus' => 'U'],
            ['nom' => 'LABADI', 'prenom' => 'Khaled', 'email' => 'labadi@et.esiea.fr', 'groupe' => $groupes[50], 'campus' => 'U'],
            ['nom' => 'NDZANA', 'prenom' => 'Gisèle', 'email' => 'ndzana@et.esiea.fr', 'groupe' => $groupes[50], 'campus' => 'U'],
            ['nom' => 'RACHEDI', 'prenom' => 'Zakaria', 'email' => 'rachedi@et.esiea.fr', 'groupe' => $groupes[50], 'campus' => 'U'],
            ['nom' => 'ROGER', 'prenom' => 'Pierre', 'email' => 'proger@et.esiea.fr', 'groupe' => $groupes[50], 'campus' => 'U'],
            ['nom' => 'SARFARAZ', 'prenom' => 'Ahmed Momin', 'email' => 'sarfaraz@et.esiea.fr', 'groupe' => $groupes[50], 'campus' => 'U'],
            ['nom' => 'DEMOLON', 'prenom' => 'Geoffrey', 'email' => 'demolon@et.esiea.fr', 'groupe' => $groupes[51], 'campus' => 'U'],
            ['nom' => 'ERDEM', 'prenom' => 'Maxime', 'email' => 'erdem@et.esiea.fr', 'groupe' => $groupes[51], 'campus' => 'U'],
            ['nom' => 'ETIENNE', 'prenom' => 'Ritchy', 'email' => 'retienne@et.esiea.fr', 'groupe' => $groupes[51], 'campus' => 'U'],
            ['nom' => 'FRIN', 'prenom' => 'Pierre', 'email' => 'frin@et.esiea.fr', 'groupe' => $groupes[51], 'campus' => 'U'],
            ['nom' => 'JAÏS', 'prenom' => 'Constantin', 'email' => 'jais@et.esiea.fr', 'groupe' => $groupes[51], 'campus' => 'U'],
            ['nom' => 'STOSSE', 'prenom' => 'Florian', 'email' => 'stosse@et.esiea.fr', 'groupe' => $groupes[51], 'campus' => 'U'],
            ['nom' => 'COULON', 'prenom' => 'Florent', 'email' => 'coulon@et.esiea.fr', 'groupe' => $groupes[52], 'campus' => 'U'],
            ['nom' => 'CUISINIER', 'prenom' => 'Clément', 'email' => 'cuisinier@et.esiea.fr', 'groupe' => $groupes[52], 'campus' => 'U'],
            ['nom' => 'GUERY', 'prenom' => 'Thibaut', 'email' => 'guery@et.esiea.fr', 'groupe' => $groupes[52], 'campus' => 'U'],
            ['nom' => 'IANCU', 'prenom' => 'Raphaël', 'email' => 'iancu@et.esiea.fr', 'groupe' => $groupes[52], 'campus' => 'U'],
            ['nom' => 'JANNAUD', 'prenom' => 'Alexandre', 'email' => 'jannaud@et.esiea.fr', 'groupe' => $groupes[52], 'campus' => 'U'],
            ['nom' => 'NOSSENT', 'prenom' => 'Alexandre', 'email' => 'nossent@et.esiea.fr', 'groupe' => $groupes[52], 'campus' => 'U'],
            ['nom' => 'GOSSART', 'prenom' => 'Nicolas', 'email' => 'ngossart@et.esiea.fr', 'groupe' => $groupes[53], 'campus' => 'U'],
            ['nom' => 'NDIAYE', 'prenom' => 'Ndeye Amy', 'email' => 'nndiaye@et.esiea.fr', 'groupe' => $groupes[53], 'campus' => 'U'],
            ['nom' => 'NGUYEN', 'prenom' => 'Wing-Yen Nathalie', 'email' => 'wnguyen@et.esiea.fr', 'groupe' => $groupes[53], 'campus' => 'U'],
            ['nom' => 'NGUYEN', 'prenom' => 'Thanh Tam', 'email' => 'thnguyen@et.esiea.fr', 'groupe' => $groupes[53], 'campus' => 'U'],
            ['nom' => 'SENDAL', 'prenom' => 'Farouk', 'email' => 'sendal@et.esiea.fr', 'groupe' => $groupes[53], 'campus' => 'U'],
            ['nom' => 'SOUMARE', 'prenom' => 'Ahmed', 'email' => 'asoumare@et.esiea.fr', 'groupe' => $groupes[53], 'campus' => 'U'],
        ];

        foreach ($etudiants as $etudiant) {

            $user = new User();
            $user->setNom($etudiant['nom']);
            $user->setPrenom($etudiant['prenom']);
            $user->setEmail($etudiant['email']);
            $user->setGroupe($etudiant['groupe']);

            switch ($etudiant['campus']) {
                case 'P':
                    $user->setCampus(User::CAMPUS_PARIS);
                    break;
                case 'L':
                    $user->setCampus(User::CAMPUS_LAVAL);
                    break;
                case 'U':
                    $user->setCampus(User::CAMPUS_UFA);
                    break;
                case 'I':
                    $user->setCampus(User::CAMPUS_INTER);
                    break;
            }

            //$encoder = $this->container->get('security.password_encoder');
            //$password = $encoder->encodePassword($user, 'test');
            //$user->setPassword($password);

            $manager->persist($user);
        }

        $manager->flush();
    }
}
