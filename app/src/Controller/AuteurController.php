<?php

namespace App\Controller;

use App\Entity\Auteur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuteurController extends AbstractController
{
    #[Route('/auteur', name: 'auteur')]
    public function index(): Response
    {

        $auteurs = $this->getDoctrine()
            ->getRepository(Auteur::class)
            ->findAll();

        return $this->render('auteur/index.html.twig', ['auteurs' => $auteurs]);

    }
}
