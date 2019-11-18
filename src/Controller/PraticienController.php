<?php

namespace App\Controller;

use App\Repository\PraticienRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PraticienController extends AbstractController
{
    /**
     * Permet d'afficher les praticiens
     * 
     * @Route("/praticien", name="praticien")
     * 
     * @return Response
     */
    public function index(PraticienRepository $repo)
    {
        $lespraticiens = $repo->findAll();

        return $this->render('praticien/index.html.twig', [
            'lespraticiens' => $lespraticiens
        ]);
    }
}
