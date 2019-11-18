<?php

namespace App\Controller;

use App\Repository\VisiteurRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VisiteurController extends AbstractController
{
    /**
     * Permet d'afficher les visiteurs
     * 
     * @Route("/visiteur", name="visiteur")
     * 
     * @return Response
     */
    public function index(VisiteurRepository $repo)
    {
        $lesvisiteurs = $repo->findAll();

        return $this->render('visiteur/index.html.twig', [
            'lesvisiteurs' => $lesvisiteurs
        ]);
    }
}
