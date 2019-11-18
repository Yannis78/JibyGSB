<?php

namespace App\Controller;

use App\Repository\RapportVisiteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RapportController extends AbstractController
{
    /**
     * Permet d'afficher la page de gestion des rapports de visites
     * 
     * @Route("/rapport", name="rapport")
     * 
     * @return Response
     */
    public function index(RapportVisiteRepository $repo)
    {
        $lesrapports = $repo->findAll();

        return $this->render('rapport/index.html.twig', [
            'lesrapports' => $lesrapports
        ]);
    }
}
