<?php

namespace LicoBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LicoBundle\Entity\Utilisateur;

/**
 * Utilisateur controller.
 *
 */
class UtilisateurController extends Controller
{
    /**
     * Lists all Utilisateur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $utilisateurs = $em->getRepository('LicoBundle:Utilisateur')->findAll();

        return $this->render('utilisateur/index.html.twig', array(
            'utilisateurs' => $utilisateurs,
        ));
    }

    /**
     * Finds and displays a Utilisateur entity.
     *
     */
    public function showAction(Utilisateur $utilisateur)
    {

        return $this->render('utilisateur/show.html.twig', array(
            'utilisateur' => $utilisateur,
        ));
    }
}
