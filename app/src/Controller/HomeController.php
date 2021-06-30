<?php

namespace App\Controller;

use App\Entity\Livre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {

        $livres = $this->getDoctrine()
            ->getRepository(Livre::class)
            ->findAll();

//        return $this->render('home/index.html.twig', [
//            'controller_name' => 'HomeController',
//        ]);

        return $this->render('home/index.html.twig', ['livres' => $livres]);
    }
}
