<?php

namespace App\Controller;

use App\Repository\GestionContenuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConseilDemenagementController extends AbstractController
{
    #[Route('/particuliers', name: 'particuliers')]
    public function particuliers(GestionContenuRepository $repoGestion): Response
    {
        $text = $repoGestion->find(1);
        $textParticuliers = $text->getDemParticuliers();
        return $this->render('conseil_demenagement/particuliers.html.twig', [
            'textParticuliers' => $textParticuliers,
        ]);
    }

    #[Route('/transfertDeBureaux', name: 'transfertDeBureaux')]
    public function transfertDeBureaux(GestionContenuRepository $repoGestion): Response
    {
        $text = $repoGestion->find(1);
        $textTransfert = $text->getDemTransfertBureaux();
        return $this->render('conseil_demenagement/transfertDeBureaux.html.twig', [
            'textTransfert' => $textTransfert,
        ]);
    }

    #[Route('/monteMeubles', name: 'monteMeubles')]
    public function monteMeubles(GestionContenuRepository $repoGestion): Response
    {
        $text = $repoGestion->find(1);
        $textMonteMeuble = $text->getDemMonteMeubles();
        return $this->render('conseil_demenagement/monteMeubles.html.twig', [
            'textMonteMeuble' => $textMonteMeuble,
        ]);
    }

    #[Route('/gardeMeubles', name: 'gardeMeubles')]
    public function monteMgardeMeubleseubles(GestionContenuRepository $repoGestion): Response
    {
        $text = $repoGestion->find(1);
        $textGardeMeuble = $text->getDemGardeMeubles();
        return $this->render('conseil_demenagement/gardeMeubles.html.twig', [
            'textGardeMeuble' => $textGardeMeuble,
        ]);
    }

    #[Route('/jourDuDemenagement', name: 'jourDuDemenagement')]
    public function jourDuDemenagement(GestionContenuRepository $repoGestion): Response
    {
        $text = $repoGestion->find(1);
        $textjourDem = $text->getDemJourDemenagement();
        return $this->render('conseil_demenagement/jourDuDemenagement.html.twig', [
            'textjourDem' => $textjourDem,
        ]);
    }

    #[Route('/preparerVotreDemenagement', name: 'preparerVotreDemenagement')]
    public function preparerVotreDemenagement(GestionContenuRepository $repoGestion): Response
    {
        $text = $repoGestion->find(1);
        $textPreparerDem = $text->getDemPreparerDemenagement();
        return $this->render('conseil_demenagement/preparerVotreDemenagement.html.twig', [
            'textPreparerDem' => $textPreparerDem,
        ]);
    }
}
