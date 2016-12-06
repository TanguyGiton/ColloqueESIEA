<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        if ($this->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('core_moncolloque_home');
        }

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('CoreBundle:Security:login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    public function activateAction(Request $request, $page)
    {

        $form = $this->createFormBuilder([])
            ->add('email', EmailType::class)
            ->add('submit', SubmitType::class, ['label' => 'Envoyer'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            $data = $form->getData();

            $email = $data['email'];

            $user = $this
                ->getDoctrine()
                ->getRepository('CoreBundle:User')
                ->findOneBy([
                    'email' => $email
                ]);

            if (null === $user) {
                $this->addFlash('warning', "L'adresse email " . $email . " n'est pas dans la base de donnée.");
            } else {

                $pass = md5($user->getId() . $user->getPrenom() . $user->getNom() . microtime());

                $subject = '';
                $body = '';

                if ($page == 'activate') {
                    $subject = 'Activation de ton compte';
                    $body = $this->render('@Core/Emails/activation.html.twig', [
                        'user' => $user,
                        'pass' => $pass,
                    ]);
                } elseif ($page == 'reinit') {
                    $subject = 'Réinitialisation du mot de passe';
                    $body = $this->render('@Core/Emails/reinitPass.html.twig', [
                        'user' => $user,
                        'pass' => $pass,
                    ]);
                }

                $message = \Swift_Message::newInstance()
                    ->setSubject('[COLLOQUE] ' . $subject)
                    ->setFrom('colloqueesiea@et.esiea.fr')
                    ->setTo($user->getEmail())
                    ->setBody($body, 'text/html');

                $this->get('mailer')->send($message);

                $user->setPassword($pass);

                $this->getDoctrine()->getManager()->flush();

                $this->addFlash('success', "Un email a bien été envoyé à " . $email . ". Clique sur le lien dans l'email pour poursuivre.");
            }
        }

        return $this->render('@Core/Security/activate.html.twig', [
            'form' => $form->createView(),
            'page' => $page
        ]);
    }

    public function newPassAction(Request $request, $pass)
    {

        $user = $this
            ->getDoctrine()
            ->getRepository('CoreBundle:User')
            ->findOneBy([
                'password' => $pass,
            ]);

        if (null === $user) {
            throw new NotFoundHttpException("Ne correspond à aucun utilisateur");
        }

        $form = $this->createFormBuilder($user)
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent être identiques',
                'required' => true,
                'first_options' => array('label' => 'Mot de passe'),
                'second_options' => array('label' => 'Confimation')
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enregister'
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            $data = $form->getData();

            $encoder = $this->get('security.password_encoder');
            $encoded = $encoder->encodePassword($data, $data->getPassword());

            $data->setPassword($encoded);

            $data->setISActive(true);

            $this->getDoctrine()->getManager()->flush();


            $this->addFlash('success', 'Le nouveau mot de passe a bien été enregistré !');
            return $this->redirectToRoute('core_moncolloque_home');
        }

        return $this->render('@Core/Security/newPass.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
