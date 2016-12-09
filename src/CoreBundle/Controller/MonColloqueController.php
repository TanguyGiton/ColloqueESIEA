<?php

namespace CoreBundle\Controller;

use CoreBundle\Entity\Chambre;
use CoreBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Csrf\CsrfToken;

class MonColloqueController extends Controller
{
    public function indexAction()
    {
        $groupe = $this->getUser()->getGroupe();

        if ($groupe) {
            $groupeNumber = $groupe->getNumero();

            $usersGroupe = $this
                ->getDoctrine()
                ->getRepository('CoreBundle:User')
                ->getUsersOfGroupeNumber($groupeNumber);

            $theme = $groupe->getTheme();
        } else {
            $usersGroupe = null;
            $theme = null;
        }

        return $this->render('CoreBundle:MonColloque:index.html.twig', [
            'usersGroupe' => $usersGroupe,
            'theme' => $theme,
            'groupe' => $groupe
        ]);
    }

    public function chooseThemeAction()
    {

        if (null == $this->getUser()->getGroupe() || null != $this->getUser()->getGroupe()->getTheme()) {
            return $this->redirectToRoute('core_moncolloque_home');
        }

        $themes = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:Theme')
            ->findAll();

        foreach ($themes as $theme) {
            $name=$theme->getId();
            $nbGroupesActuel=0;
            $GroupesActuel = $this
                ->getDoctrine()
                ->getRepository('CoreBundle:Groupe')
                ->findBy(
                    array('theme' => "$name"));
            foreach ($GroupesActuel as $grp) {
                $nbGroupesActuel+=$grp->getNombreEleve();
            }
            $theme->setPlacesOccupees($nbGroupesActuel);
        }

        return $this->render('CoreBundle:MonColloque:chooseTheme.html.twig', [
            'themes' => $themes,
        ]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function choosenThemeAction(Request $request, $id)
    {

        if (null == $this->getUser()->getGroupe() || null != $this->getUser()->getGroupe()->getTheme()) {
            return $this->redirectToRoute('core_moncolloque_home');
        }

        $theme = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:Theme')
            ->find($id);

        if (null === $theme) {
            throw new NotFoundHttpException("Ce thème n'existe pas.");
        }

        $name = $theme->getId();
        $GroupesActuel = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:Groupe')
            ->findBy(
                array('theme' => "$name"));
            $nbGroupesActuel=0;
        foreach ($GroupesActuel as $grp) {
            $nbGroupesActuel=$nbGroupesActuel+$grp->getNombreEleve();
        }

        if ($nbGroupesActuel >= $theme->getnbGroupes()) {
            $this->addFlash('warning', 'Ce thème est déjà  complet.');
            return $this->redirectToRoute('core_moncolloque_choosetheme');
        }

        $this->addFlash('warning', 'Les inscriptions aux thèmes ne sont pas encore ouvertes');
        return $this->redirectToRoute('core_moncolloque_choosetheme');

        if ($request->isMethod('POST')) {
            if ($request->request->getInt('id') == $id) {
                $this->getUser()->getGroupe()->setTheme($theme);
                $this->getUser()->getGroupe()->setLeader($this->getUser());

                $this->getDoctrine()->getManager()->flush();

                $this->addFlash('notice', 'Votre thème a bien été enregistré');

                return $this->redirectToRoute('core_moncolloque_home');
            }
        }


        return $this->render('@Core/MonColloque/choosenTheme.html.twig', [
            'theme' => $theme,
            'nbGroupesActuel' => $nbGroupesActuel
        ]);
    }

    public function chooseChambreAction()
    {

        if (null != $this->getUser()->getChambre()) {
            return $this->redirectToRoute('core_moncolloque_home');
        }

        $chambres = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:Chambre')
            ->getChambresEtudiantes();

        foreach ($chambres as $chambre) {
            $chambre->setPlacesOccupees(
                $this
                    ->getDoctrine()
                    ->getRepository('CoreBundle:User')
                    ->countOccupantsOnChambre($chambre->getId())
            );
        }

        return $this->render('@Core/MonColloque/chooseChambre.html.twig', [
            'chambres' => $chambres,
        ]);
    }

    public function choosenChambreAction(Request $request, $id)
    {

        if (null != $this->getUser()->getChambre()) {
            return $this->redirectToRoute('core_moncolloque_home');
        }

        $chambre = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:Chambre')
            ->find($id);

        if (null === $chambre || $chambre->getType() != Chambre::TYPE_ETUDIANT) {
            throw new NotFoundHttpException("Cette chambre n'existe pas !");
        }
        $chambre->setPlacesOccupees($this
            ->getDoctrine()
            ->getRepository('CoreBundle:User')
            ->countOccupantsOnChambre($chambre->getId())
        );

        if ($chambre->getPlacesOccupees() >= $chambre->getCapacite()) {
            $this->addFlash('warning', 'Cette chambre est déjà complète.');
            return $this->redirectToRoute('core_moncolloque_choosechambre');
        }

        if ($request->isMethod('POST')) {
            if ($request->request->getInt('id') == $chambre->getId()) {
                $this->getUser()->setChambre($chambre);

                $this->getDoctrine()->getManager()->flush();

                $this->addFlash('notice', 'Votre chambre a bien été enregistrée');

                return $this->redirectToRoute('core_moncolloque_home');
            }
        }

        $occupants = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:User')
            ->getOccupantsOnChambre($chambre->getId());


        return $this->render('@Core/MonColloque/choosenChambre.html.twig', [
            'chambre' => $chambre,
            'occupants' => $occupants
        ]);
    }

    public function chooseActiviteAction()
    {

        if (null != $this->getUser()->getPackActivites()) {
            return $this->redirectToRoute('core_moncolloque_home');
        }

        $packs = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:PackActivites')
            ->getAllWithActivites();

        $userRepository = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:User');

        foreach ($packs as $pack) {
            $pack->setOccupation(
                $userRepository->countParticipantsOnPackActivites($pack->getId())
            );
        }

        return $this->render('@Core/MonColloque/chooseActivites.html.twig', [
            'packsActivites' => $packs,
        ]);
    }

    public function choosenPackActivitesAction(Request $request, $id)
    {

        if (null != $this->getUser()->getPackActivites()) {
            return $this->redirectToRoute('core_moncolloque_home');
        }

        $pack = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:PackActivites')
            ->find($id);

        if (null === $pack) {
            throw new NotFoundHttpException("Ce pack n'existe pas !");
        }

        $userRepository = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:User');

        $pack->setOccupation(
            $userRepository->countParticipantsOnPackActivites($pack->getId())
        );

        if ($pack->getOccupation() >= $pack->getNbPlaces()) {
            $this->addFlash('warning', 'Ce pack est déjà complet.');
            return $this->redirectToRoute('core_moncolloque_chooseactivite');
        }

        if ($request->isMethod('POST')) {
            if ($request->request->getInt('id') == $pack->getId()) {
                $this->getUser()->setPackActivites($pack);

                $this->getDoctrine()->getManager()->flush();

                $this->addFlash('notice', "Votre pack d'activités a bien été enregistrée");

                return $this->redirectToRoute('core_moncolloque_home');
            }
        }


        return $this->render('@Core/MonColloque/choosenActivites.html.twig', [
            'pack' => $pack
        ]);
    }

    public function chooseNocturneAction(Request $request)
    {

        if (null != $this->getUser()->getNocturne()) {
            return $this->redirectToRoute('core_moncolloque_home');
        }

        if ($request->isMethod('GET')) {
            $token = $request->query->get('token');
            $choix = $request->query->get('choix');

            if ($this->get('security.csrf.token_manager')->isTokenValid(new CsrfToken('choix-nocturne', $token)) && ($choix === User::NOCTURNE_RAQUETTE || $choix === User::NOCTURNE_SKI)) {

                $this->getUser()->setNocturne($choix);
                $this->getDoctrine()->getManager()->flush();

                $this->addFlash('notice', "Votre nocturne a bien été personnalisée");

                return $this->redirectToRoute('core_moncolloque_home');
            }
        }

        $userRepo = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:User');

        $typesNocturne = [
            [
                'nom' => 'Ski (non prêté)',
                'slug' => User::NOCTURNE_SKI,
                'nbPlaces' => User::NOCTURNE_NB_SKI,
                'occupation' => $userRepo->countNocturneWith(User::NOCTURNE_SKI),
                'description' => 'L’ESIEArque sportif que tu es, a déjà dévalé les pistes de jour.<br> Mais tu t’es toujours demandé à quoi ça ressemblait de nuit ? Tu as la possibilité de découvrir ce sport en nocturne alors ouvre grand tes yeux et profite des lumière de la plaine de nuit.'
            ],
            [
                'nom' => 'Raquette',
                'slug' => User::NOCTURNE_RAQUETTE,
                'nbPlaces' => User::NOCTURNE_NB_RAQUETTE,
                'occupation' => $userRepo->countNocturneWith(User::NOCTURNE_RAQUETTE),
                'description' => 'ESIEArque un peu moins doué en ski ou snowboard mais néanmoins sportif ou pas, tu rêves de découvrir tranquillement la montagne enneigée de nuit ?<br>
Chausse tes raquettes et profite de des joies d’une nocturne dans la station.'
            ]
        ];

        return $this->render('@Core/MonColloque/chooseNocturne.html.twig', [
            'typesNocturne' => $typesNocturne
        ]);
    }

    public function MenuAction()
    {

        $groupe = $this->getUser()->getGroupe();

        if ($groupe) {
            $groupeNumber = $groupe->getNumero();

            $usersGroupe = $this
                ->getDoctrine()
                ->getRepository('CoreBundle:User')
                ->getUsersOfGroupeNumber($groupeNumber);

            $theme = $groupe->getTheme();
        } else {
            $theme = null;
            $usersGroupe = null;
        }

        $chambre = $this->getUser()->getChambre();

        if ($chambre) {
            $occupants = $this
                ->getDoctrine()
                ->getRepository('CoreBundle:User')
                ->getOccupantsOnChambre($chambre->getId());
            $chambre->setPlacesOccupees($this
                ->getDoctrine()
                ->getRepository('CoreBundle:User')
                ->countOccupantsOnChambre($chambre->getId())
            );
        } else {
            $occupants = null;
        }

        $pack = $this->getUser()->getPackActivites();

        $nocturne = $this->getUser()->getNocturne();

        $onebus = $this->getUser()->getBus();

        if ($onebus) {
            $occupantsBus = $this
                ->getDoctrine()
                ->getRepository('CoreBundle:User')
                ->getOccupantsOnBus($onebus->getId());
        } else {
            $occupantsBus = null;
        }

        return $this->render('@Core/MonColloque/menu.html.twig', [
            'theme' => $theme,
            'groupe' => $groupe,
            'usersGroupe' => $usersGroupe,
            'chambre' => $chambre,
            'occupants' => $occupants,
            'pack' => $pack,
            'nocturne' => $nocturne,
            'onebus' => $onebus,
            'occupantsBus' => $occupantsBus
        ]);
    }

    public function chooseBusAction()
    {

        if (null != $this->getUser()->getBus()) {
            return $this->redirectToRoute('core_moncolloque_home');
        }

        $campus = $this->getUser()->getCampus();

        if ($campus == User::CAMPUS_UFA)
            $campus = User::CAMPUS_PARIS;

        $bus = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:Bus')
            ->findByCampus($campus);

        foreach ($bus as $onebus) {
            $onebus->setPlacesOccupees(
                $this
                    ->getDoctrine()
                    ->getRepository('CoreBundle:User')
                    ->countOccupantsOnBus($onebus->getId())
            );
        }

        return $this->render('@Core/MonColloque/chooseBus.html.twig', [
            'bus' => $bus
        ]);
    }

    public function choosenBusAction(Request $request, $id)
    {

        if (null != $this->getUser()->getBus()) {
            return $this->redirectToRoute('core_moncolloque_home');
        }

        $onebus = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:Bus')
            ->find($id);

        $campus = $this->getUser()->getCampus();
        if ($campus == User::CAMPUS_UFA)
            $campus = User::CAMPUS_PARIS;

        if (null === $onebus || $onebus->getCampus() != $campus) {
            throw new NotFoundHttpException("Ce bus n'existe pas !");
        }
        $onebus->setPlacesOccupees($this
            ->getDoctrine()
            ->getRepository('CoreBundle:User')
            ->countOccupantsOnBus($onebus->getId())
        );

        if ($onebus->getPlacesOccupees() >= $onebus->getCapacite()) {
            $this->addFlash('warning', 'Ce bus est déjà complet.');
            return $this->redirectToRoute('core_moncolloque_choosebus');
        }

        if ($request->isMethod('POST')) {
            if ($request->request->getInt('id') == $onebus->getId()) {
                $this->getUser()->setBus($onebus);

                $this->getDoctrine()->getManager()->flush();

                $this->addFlash('notice', 'Votre bus a bien été enregistré');

                return $this->redirectToRoute('core_moncolloque_home');
            }
        }

        $occupants = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:User')
            ->getOccupantsOnBus($onebus->getId());


        return $this->render('@Core/MonColloque/choosenBus.html.twig', [
            'onebus' => $onebus,
            'occupants' => $occupants
        ]);
    }
}