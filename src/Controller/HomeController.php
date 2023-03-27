<?php

namespace App\Controller;

use App\Repository\TeamRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(TeamRepository $teamRepository): Response
    {
        return $this->render('pages/home.html.twig', [
            'teams' => $teamRepository->findAll(),
        ]);
    }
}
