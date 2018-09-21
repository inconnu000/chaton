<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChatonController extends AbstractController
{
    /**
     * @Route("/chaton")
     */
    public function affichage()
    {
        return $this->render('chaton.html.twig');
    }

    /**
     * @Route("/Chaton")
     */
    public function affichages()
    {
        return $this->render('Caton.html.twig');
    }
}