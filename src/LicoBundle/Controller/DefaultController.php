<?php

namespace LicoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LicoBundle:Default:index.html.twig');
    }

    public function pageAction()
    {
        return $this->render('LicoBundle::page1.html.twig');
    }

    public function page2Action()
    {
        return $this->render('LicoBundle::page2.html.twig');
    }

    public function page3Action()
    {
        $em = $this->getDoctrine()->getManager();

        $environnements = $em->getRepository('LicoBundle:Environnement')->findAll();
        $licornes = $em->getRepository('LicoBundle:Licorne')->findAll();

        return $this->render('LicoBundle::page3.html.twig', array(
            'environnements' => $environnements,
            'licornes' => $licornes,
        ));
    }

    public function page4Action($id)
    {
        $em = $this->getDoctrine()->getManager();

        $licorne = $em->getRepository('LicoBundle:Licorne')->findOneById($id);

        return $this->render('LicoBundle::page4.html.twig', array(
            'licorne' => $licorne,
        ));
    }

    public function page5Action()
    {
        return $this->render('LicoBundle::page5.html.twig');
    }

    public function page6Action()
    {
        return $this->render('LicoBundle::page6.html.twig');
    }
}
