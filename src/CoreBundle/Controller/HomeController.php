<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Information;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/", name="core_homepage")
     */
    public function indexAction()
    {
        return $this->render('CoreBundle:Home:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('CoreBundle:Home:about.html.twig');
    }

    public function locationAction()
    {
        return $this->render('CoreBundle:Home:location.html.twig');
    }

    public function showAction()
    {
        $rep = $this->getDoctrine()->getRepository('CoreBundle:User');
        $users = $rep->findAll();
        return $this->render('CoreBundle:Home:users.html.twig',
            array('users' => $users));
    }

    public function informationAction()
    {
        $listInformations = [
            new Information(
                'cutlery',
                '60€ pour la semaine',
                'et pour te régaler les papilles !',
                'Contribution de 60€ pour la semaine de Colloque. Excellent rapport qualité/prix en comparaison aux équivalents des prestations des années antérieures qui ne se sont pas déroulées à Guébriant.'
            ),
            new Information(
                'bed',
                'Linge de lit fourni',
                'de quoi dormir sur tes deux oreilles.',
                'Les draps, une couverture et un oreiller te seront fournis. Il n\'est pas nécessaire d\'en apporter.'
            ),
            new Information(
                'tint',
                'Salle de bain privée',
                'Linge de toilette non fourni.',
                'Pas de sanitaire commun, chaque chambre possède sa propre salle de bain. Les serviettes ne sont pas fournies, n\'oublie pas d\'en apporter !'
            ),
            new Information(
                'shield',
                'Vêtements chauds et imperméable',
                '',
                "N'oublie pas d'apporter ta combinaison de ski et tes après-ski. Nous allons faire des activités dans la neige !"
            ),
            new Information(
                'venus-mars',
                'Chambres mixtes',
                'Pas de restrictions de colloque-ataire.',
                'Les chambres sont mixtes, vous pouvez être avec qui vous souhaitez : Paris, Laval, homme et femme.'
            ),
            new Information(
                'calendar',
                'Les dates du colloque',
                'du 28 janvier au 4 février',
                'Nous partons en bus le 28 février en soirée, et nous rentrons le 4 février en journée.'
            ),
            new Information(
                'glass',
                'Un bar sur place',
                'à prix abordable !',
                'Un bar sera à disposition tous les soirs pour vous retrouver entre étudiants.'
            ),
            new Information(
                'money',
                'La Passeport Caution',
                'pour profiter de ton Colloque',
                'Prévois 50€ de caution pour accéder à tous les services du site : billard, babyfoot, luge, fer à repasse, etc...'
            ),
        ];

        return $this->render('CoreBundle:Home:information.html.twig', [
            'listInformations' => $listInformations,
        ]);
    }

    public function contactAction()
    {
        return $this->render('CoreBundle:Home:contact.html.twig');
    }
}
