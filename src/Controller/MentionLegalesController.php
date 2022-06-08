<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MentionLegalesController extends AbstractController
{
    #[Route('/mention', name: 'mention')]
    public function index(): Response
    {
        return $this->render('mention_legales/index.html.twig', []);
    }
}
