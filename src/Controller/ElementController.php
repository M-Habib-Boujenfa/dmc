<?php

namespace App\Controller;

use App\Entity\Element;
use App\Repository\ElementRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ElementController extends AbstractController
{
    #[Route('/element', name: 'app_element')]
    public function index(ElementRepository $elementRepo): Response
    {
        //$elements = $elementRepo->findAll();
        return $this->render('element/index.html.twig', [
            //'controller_name' => 'ElementController',
            //'elements' => $elements,
        ]);
    }
    #[Route('/element/salon', name: 'salon')]
    public function showElementsSalon(ElementRepository $elementRepo): JsonResponse
    {
        $elementsSalon = $elementRepo->findBy(['categorie' => 'Salon']);
        return $this->json(
            ['elements' => $elementsSalon],
            200
        );
    }
    #[Route('/element/salleAmanger', name: 'salleAmanger')]
    public function showElementsSalleAmanger(ElementRepository $elementRepo): JsonResponse
    {
        $elementsSalleAmanger = $elementRepo->findBy(['categorie' => 'Salle à manger']);
        return $this->json(
            ['elements' => $elementsSalleAmanger],
            200
        );
    }
    #[Route('/element/chambre', name: 'chambre')]
    public function showElementsChambre(ElementRepository $elementRepo): JsonResponse
    {
        $elementsChambre = $elementRepo->findBy(['categorie' => 'Chambre']);
        return $this->json(
            ['elements' => $elementsChambre],
            200
        );
    }
    #[Route('/element/bureau', name: 'bureau')]
    public function showElementsBureau(ElementRepository $elementRepo): JsonResponse
    {
        $elementsBureau = $elementRepo->findBy(['categorie' => 'Bureau']);
        return $this->json(
            ['elements' => $elementsBureau],
            200
        );
    }
    #[Route('/element/cuisine', name: 'cuisine')]
    public function showElementsCuisine(ElementRepository $elementRepo): JsonResponse
    {
        $elementsCuisine = $elementRepo->findBy(['categorie' => 'Cuisine']);

        return $this->json(
            ['elements' => $elementsCuisine],
            200
        );
    }
    #[Route('/element/salleDeBain', name: 'salleDeBain')]
    public function showElementsSalleDeBain(ElementRepository $elementRepo): JsonResponse
    {
        $elementsSalleDeBain = $elementRepo->findBy(['categorie' => 'Salle de bain']);

        return $this->json(
            ['elements' => $elementsSalleDeBain],
            200
        );
    }
    #[Route('/element/garage', name: 'garage')]
    public function showElementsGarage(ElementRepository $elementRepo): JsonResponse
    {
        $elementsGarage = $elementRepo->findBy(['categorie' => 'Garage']);

        return $this->json(
            ['elements' => $elementsGarage],
            200
        );
    }
    #[Route('/element/exterieur', name: 'exterieur')]
    public function showElementsExterieur(ElementRepository $elementRepo): JsonResponse
    {
        $elementsExterieur = $elementRepo->findBy(['categorie' => 'Exterieur']);

        return $this->json(
            ['elements' => $elementsExterieur],
            200
        );
    }
    #[Route('/element/divers', name: 'divers')]
    public function showElementsDivers(ElementRepository $elementRepo): JsonResponse
    {
        $elementsDivers = $elementRepo->findBy(['categorie' => 'Divers']);

        return $this->json(
            ['elements' => $elementsDivers],
            200
        );
    }
    #[Route('/element/{id}', name: 'volume')]
    public function volumeElement(Element $element): JsonResponse
    {
        return $this->json(
            ['volume' => $element->getVolume()],
            200
        );
    }
}
