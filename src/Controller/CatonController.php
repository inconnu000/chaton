<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CatonController extends AbstractController
{
    /**
     * @Route("/Chaton")
     */
    public function affichage()
    {
        return $this->render('Caton.html.twig');
    }
}