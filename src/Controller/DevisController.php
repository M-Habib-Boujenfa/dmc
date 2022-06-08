<?php

namespace App\Controller;

use App\Entity\Devis;
use App\Entity\Tarif;
use App\Form\DevisType;
use App\Form\TarifType;
use App\Entity\Assurance;
use App\Entity\Prestation;
use App\Service\PdfService;
use App\Service\MailerService;
use App\Repository\DevisRepository;
use App\Repository\TarifRepository;
use App\Repository\AssuranceRepository;
use App\Repository\GestionContenuRepository;
use App\Repository\PrestationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class DevisController extends AbstractController
{
    #[Route('/devis', name: 'devis')]
    #[Route('/devis/{volume}', name: 'app_devis')]
    public function index(Request $request, EntityManagerInterface $manager, MailerService $mailerService, GestionContenuRepository $repoGestion, $volume = null): Response
    {
        $texteDevis = $repoGestion->find(1);
        $verifAdresseArrivee = false;
        $verifDateDeDepart = false;
        $verifDateArrivee = false;
        $verifVilleArrivee = false;
        $verifAdresseDepart = false;
        $verifCodePostalDepart = false;
        $verifVilleDepart = false;
        $verifCodePostalArrivee = false;
        $verifTelephone = false;
        $verifEtageDepart = false;
        $verifPrenom = false;
        $verifEmail = false;
        $verifEtageArrivee = false;
        $verifVolume = false;
        $verifNom = false;
        $messageEmail = "";
        $messageDateDeDepart = "";
        $messageCodePostalDepart = "";
        $messageDateArrivee = "";
        $messageNom = "";
        $messageVolume = '';
        $messagePrenom = "";
        $messageCodePostalArrivee = "";
        $messageTelephone = "";
        $messageVilleDepart = "";
        $messageadresseDepart = "";
        $messageVilleArrivee = "";
        $messageEtageDepart = "";
        $messageEtageArrivee = "";
        $messageadresseArrivee = "";
        $devis = new Devis();
        $form = $this->createForm(DevisType::class, $devis);
        $form->handleRequest($request);
        $dateDeDepart = $form->get('dateDeDepart')->getData();
        $dateArrivee = $form->get('dateArrivee')->getData();
        $CodePostalDepart = $form->get('codePostalDeDepart')->getData();
        $CodePostalArrivee = $form->get('codePostalArrivee')->getData();
        $email = $form->get('email')->getData();
        $nom = $form->get('nom')->getData();
        $prenom = $form->get('prenom')->getData();
        $telephone = $form->get('telephone')->getData();
        $VilleDepart = $form->get('villeDeDepart')->getData();
        $adresseDepart = $form->get('adresseDeDepart')->getData();
        $VilleArrivee = $form->get('villeArrivee')->getData();
        $adresseArrivee = $form->get('adresseArrivee')->getData();
        $etageDeDepart = $form->get('etageDeDepart')->getData();
        $etageArrivee = $form->get('etageArrivee')->getData();
        $getVolume = $form->get('volume')->getData();
        if ($form->isSubmitted() && $form->isValid()) {

            if (preg_match("/^[0-9\., ]+$/", $getVolume)) {
                $verifVolume = true;
            } else {
                $messageVolume = "Volume non valide ";
            }

            if (preg_match("/^[0-9 .\/]{0,11}$/", $dateDeDepart)) {
                $verifDateDeDepart = true;
            } else {
                $messageDateDeDepart = "Date de Depart non valide ";
            }

            if (preg_match("/^[0-9 .\/]{0,11}$/", $dateArrivee)) {
                $verifDateArrivee = true;
            } else {
                $messageDateArrivee = "Date d'Arrivée non valide ";
            }

            if (preg_match("/^[0-9]{4,9}$/", $CodePostalDepart)) {
                $verifCodePostalDepart = true;
            } else {
                $messageCodePostalDepart = "Code Postal non valide ";
            }

            if (preg_match("/^[0-9]{4,9}$/", $CodePostalArrivee)) {
                $verifCodePostalArrivee = true;
            } else {
                $messageCodePostalArrivee = "Code Postal non valide ";
            }

            if (preg_match("/^[0-9]{1,2}$/", $etageDeDepart)) {
                $verifEtageDepart = true;
            } else {
                $messageEtageDepart = "Etage Depart non valide ";
            }


            if (preg_match("/^[0-9]{1,2}$/", $etageArrivee)) {
                $verifEtageArrivee = true;
            } else {
                $messageEtageArrivee = "Etage Arrivée non valide ";
            }

            if (preg_match("/^[.\w-]+@[\w]{2,50}\.[\w]{1,50}$/", $email)) {

                $verifEmail = true;
            } else {
                $messageEmail = "E-mail n'est pas Valide";
            }

            if (preg_match("/^[a-zA-Z àïëòùèéç-]{1,30}$/", $nom)) {

                $verifNom = true;
            } else {
                $messageNom = " Nom n'est pas valide";
            }

            if (preg_match("/^[a-zA-Z àïëòùèéç-]{1,30}$/", $prenom)) {
                $verifPrenom = true;
            } else {
                $messagePrenom = "Prénom n'est pas valide";
            }
            if (preg_match("/^[0-9]{9,20}$/", $telephone)) {

                $verifTelephone = true;
            } else {
                $messageTelephone = "Télephone n'est pas valide";
            }
            if (preg_match("/^[a-zA-Z àïëòùèçé - ']{1,100}$/", $VilleDepart)) {

                $verifVilleDepart = true;
            } else {
                $messageVilleDepart = "Ville de départ n'est pas valide";
            }
            if (preg_match("/^[0-9a-zA-Z àïëòùçèé  - ']{1,100}$/", $adresseDepart)) {

                $verifAdresseDepart = true;
            } else {
                $messageadresseDepart = "Adresse de départ n'est pas valide";
            }



            if (preg_match("/^[a-zA-Z àïëòçùèé - ']{1,100}$/", $VilleArrivee)) {

                $verifVilleArrivee = true;
            } else {
                $messageVilleArrivee = "Ville d'arivée n'est pas valide";
            }
            if (preg_match("/^[0-9a-zA-Z  àïëòùçèé - ']{1,100}$/", $adresseArrivee)) {

                $verifAdresseArrivee = true;
            } else {
                $messageadresseArrivee = "Adresse d'arivée n'est pas valide";
            }
        }
        if (
            $verifEmail  &&  $verifNom && $verifPrenom && $verifTelephone && $verifVilleDepart &&
            $verifAdresseDepart &&  $verifVilleArrivee &&  $verifAdresseArrivee && $verifDateDeDepart  &&
            $verifDateArrivee && $verifCodePostalDepart && $verifCodePostalArrivee && $verifEtageDepart &&
            $verifEtageArrivee && $verifVolume
        ) {
            $manager->persist($devis);
            $mailerService->mailConfirmationDevis($devis);
            $manager->flush();
            return $this->redirectToRoute('accueil');
        } else {

            return $this->render('devis/index.html.twig', [
                'formView' => $form->createView(),
                'messageEmail' => $messageEmail,
                'messageNom' => $messageNom,
                'messagePrenom' => $messagePrenom,
                'messageTelephone' => $messageTelephone,
                'messageVilleDepart' => $messageVilleDepart,
                'messageadresseDepart' => $messageadresseDepart,
                'messageVilleArrivee' => $messageVilleArrivee,
                'messageadresseArrivee' => $messageadresseArrivee,
                'messageDateDeDepart' => $messageDateDeDepart,
                'messageDateArrivee' => $messageDateArrivee,
                'messageCodePostalDepart' => $messageCodePostalDepart,
                'messageCodePostalArrivee' => $messageCodePostalArrivee,
                'messageEtageDepart' => $messageEtageDepart,
                'messageEtageArrivee' => $messageEtageArrivee,
                'messageVolume' => $messageVolume,
                'volume' => $volume,
                'texteDevis' => $texteDevis->getDevisMain()
            ]);
        }
    }

    #[Route('/recherche', name: 'search')]
    #[IsGranted('ROLE_ADMIN')]
    public function searchDevis(Request $request, DevisRepository $repoDevis): Response
    {
        $formId = $this->createFormBuilder()
            ->add('id', TextType::class, ['label' => false, "attr" => [
                "class" => "form-control"
            ]])
            ->getForm();
        $formId->handleRequest($request);
        if ($formId->isSubmitted() && $formId->isValid()) {
            $queryTable = $request->get("form");
            $query = $queryTable["id"];
            $foundDevis = $repoDevis->searchId($query);
            return $this->render('devis/found.html.twig', compact('foundDevis'));
        }

        $formNameMail = $this->createFormBuilder()
            ->add('searchNameMail', TextType::class, ['label' => false, "attr" => [
                "class" => "form-control"
            ]])
            ->getForm();
        $formNameMail->handleRequest($request);
        if ($formNameMail->isSubmitted() && $formNameMail->isValid()) {
            $queryTable = $request->get("form");
            $query = $queryTable["searchNameMail"];
            $foundDevis = $repoDevis->searchNomEmail($query);
            return $this->render('devis/found.html.twig', compact('foundDevis'));
        }

        $formTel = $this->createFormBuilder()
            ->add('telephone', TextType::class, ['label' => false, "attr" => [
                "class" => "form-control"
            ]])


            ->getForm();
        $formTel->handleRequest($request);
        if ($formTel->isSubmitted() && $formTel->isValid()) {
            $queryTable = $request->get("form");
            $query = $queryTable["telephone"];
            $foundDevis = $repoDevis->searchTelephone($query);
            return $this->render('devis/found.html.twig', compact('foundDevis'));
        }

        $formCd = $this->createFormBuilder()
            ->add('codePostalDepart', TextType::class, ['label' => false, "attr" => [
                "class" => "form-control"
            ]])
            ->getForm();
        $formCd->handleRequest($request);
        if ($formCd->isSubmitted() && $formCd->isValid()) {
            $queryTable = $request->get("form");
            $query = $queryTable["codePostalDepart"];
            $foundDevis = $repoDevis->searchCodePostalDepart($query);
            return $this->render('devis/found.html.twig', compact('foundDevis'));
        }

        $formDate = $this->createFormBuilder()
            ->add('dateDepart', TextType::class, ['label' => false, "attr" => [
                "class" => "form-control"
            ]])
            ->getForm();
        $formDate->handleRequest($request);
        if ($formDate->isSubmitted() && $formDate->isValid()) {
            $queryTable = $request->get("form");
            $query = $queryTable["dateDepart"];
            $foundDevis = $repoDevis->searchDateDepart($query);
            return $this->render('devis/found.html.twig', compact('foundDevis'));
        }
        return $this->renderForm('devis/search.html.twig', compact('formNameMail', 'formId', 'formTel', 'formCd', 'formDate'));
    }

    #[Route('/devisATraiter', name: 'untreated',)]
    #[IsGranted('ROLE_ADMIN')]
    public function displayDevisNonTraite(DevisRepository $repoDevis): Response
    {
        $foundDevis = $repoDevis->findBy(['idTarif' => null]);
        return $this->render('devis/found.html.twig', [
            'foundDevis' => $foundDevis,
        ]);
    }

    #[Route('/tableauDeBord/{id}', name: 'dashboard')]
    #[IsGranted('ROLE_ADMIN')]
    public function displayDashBoard(Devis $devis): Response
    {

        return $this->render('devis/dashboard.html.twig', compact('devis'));
    }


    #[Route('/creeDevis/{id}', name: 'update_devis')]
    #[IsGranted('ROLE_ADMIN')]
    public function updateDevis(Devis $devis, Request $request, EntityManagerInterface $manager, TarifRepository $repoTarif, AssuranceRepository $repoAssurance, PrestationRepository $repoPrestation): Response
    {
        if ($devis->getIdTarif()) {
            $query = $repoTarif->findBy(['id' => $devis->getIdTarif()->getId()]);
            $tarif = $query[0];
        } else {
            $tarif = new Tarif;
            $user = $this->getUser();
            $tarif->setIdUser($user);
        }


        $formTarif = $this->createForm(TarifType::class, $tarif);
        $formTarif->handleRequest($request);

        $formDevis = $this->createForm(DevisType::class, $devis);
        $formDevis->handleRequest($request);

        if ($devis->getIdAssurance()) {
            $formAssurance = $this->createFormBuilder()
                ->add('assurance', EntityType::class, [
                    'class' => Assurance::class,
                    'choice_label' => 'garantie',
                    'data' => $devis->getIdAssurance(),
                    "label" => false,
                    "attr" => ["class" => 'form-control'],
                ])
                ->getForm();
        } else {
            $formAssurance = $this->createFormBuilder()
                ->add('assurance', EntityType::class, [
                    'class' => Assurance::class,
                    'choice_label' => 'garantie',
                    "label" => false,
                    "attr" => ["class" => 'form-control'],
                ])
                ->getForm();
        }
        $formAssurance->handleRequest($request);
        if ($devis->getIdPrestation()) {
            $formPrestation = $this->createFormBuilder()
                ->add('prestation', EntityType::class, [
                    'class' => Prestation::class,
                    'choice_label' => 'nom',
                    'data' => $devis->getIdPrestation(),
                    'expanded' => false,
                    'multiple' => false,
                    "label" => false,
                    "attr" => ["class" => 'form-control'],
                ])
                ->getForm();
        } else {
            $formPrestation = $this->createFormBuilder()
                ->add('prestation', EntityType::class, [
                    'class' => Prestation::class,
                    'choice_label' => 'nom',
                    'expanded' => false,
                    'multiple' => false,
                    "label" => false,
                    "attr" => ["class" => 'form-control'],
                ])
                ->getForm();
        }


        $formPrestation->handleRequest($request);



        if ($formTarif->isSubmitted() && $formTarif->isValid()) {
            $formData =  $request->get('form');

            $prestationData =  $formData["prestation"];
            $prestationObject = $repoPrestation->findBy(["id" => $prestationData]);
            $prestation = $prestationObject[0];
            $devis->setIdPrestation($prestation);

            $assuranceData = $formData["assurance"];
            $assuranceObject = $repoAssurance->findBy(["id" => $assuranceData]);
            $assurance = $assuranceObject[0];
            $devis->setIdAssurance($assurance);

            $manager->persist($tarif);
            $manager->flush();
            $devis->setIdTarif($tarif);
            $manager->persist($devis);
            $manager->flush();
            return $this->redirectToRoute("dashboard", ["id" => $devis->getId()]);
        }
        return $this->renderForm('devis/updateDevis.html.twig', compact('formTarif', 'formDevis', 'formAssurance', 'formPrestation'));
    }

    #[Route('/pdfDevis/{id}', name: 'pdfDevis')]
    #[IsGranted('ROLE_ADMIN')]
    public function genPdfDevis(PdfService $pdf, Devis $devis, TarifRepository $tarifRepo, PrestationRepository $prestaRepo, AssuranceRepository $assuranceRepo)
    {
        $queryTarif = $tarifRepo->findBy(['id' => $devis->getIdTarif()]);
        $tarif = $queryTarif[0];

        $queryPrestation = $prestaRepo->findBy(['id' => $devis->getIdPrestation()]);
        $presta = $queryPrestation[0];

        $queryAssurance = $assuranceRepo->findBy(['id' => $devis->getIdAssurance()]);
        $assurance = $queryAssurance[0];

        $date = date("d.m.y");
        $html = $this->renderView('devis/pdfDevis.html.twig', [
            'devis' => $devis,
            'date' => $date,
            'tarif' => $tarif,
            'presta' => $presta,
            'assurance' => $assurance,
            'tva' => 0.20,
        ]);


        return $pdf->showPdfFile($html);
    }


    #[Route('/pdfFacture/{id}', name: 'pdfFacture')]
    #[IsGranted('ROLE_ADMIN')]
    public function genPdfFacture(PdfService $pdf, Devis $devis, TarifRepository $tarifRepo, PrestationRepository $prestaRepo, AssuranceRepository $assuranceRepo)
    {
        $queryTarif = $tarifRepo->findBy(['id' => $devis->getIdTarif()]);
        $tarif = $queryTarif[0];

        $queryPrestation = $prestaRepo->findBy(['id' => $devis->getIdPrestation()]);
        $presta = $queryPrestation[0];

        $queryAssurance = $assuranceRepo->findBy(['id' => $devis->getIdAssurance()]);
        $assurance = $queryAssurance[0];

        $date = date("d.m.y");
        $html = $this->renderView('facture/oneFacture.html.twig', [
            'devis' => $devis,
            'date' => $date,
            'tarif' => $tarif,
            'presta' => $presta,
            'assurance' => $assurance,
            'tva' => 0.20,
        ]);

        return $pdf->showPdfFile($html);
    }


    #[Route('/mailDevis/{id}', name: 'mailDevis')]
    #[IsGranted('ROLE_ADMIN')]
    public function sendEmailDevis(MailerService $mailerService, Devis $devis, TarifRepository $tarifRepo, PrestationRepository $prestaRepo, AssuranceRepository $assuranceRepo)
    {
        $queryTarif = $tarifRepo->findBy(['id' => $devis->getIdTarif()]);
        $tarif = $queryTarif[0];

        $queryPrestation = $prestaRepo->findBy(['id' => $devis->getIdPrestation()]);
        $presta = $queryPrestation[0];

        $queryAssurance = $assuranceRepo->findBy(['id' => $devis->getIdAssurance()]);
        $assurance = $queryAssurance[0];

        $date = date("d.m.y");
        $html = $this->renderView('devis/pdfDevis.html.twig', [
            'devis' => $devis,
            'date' => $date,
            'tarif' => $tarif,
            'presta' => $presta,
            'assurance' => $assurance,
            'tva' => 0.20,
        ]);

        $mailerService->emailDevis($devis, $html);
        $this->addFlash('message', 'email bien envoyé');
        return $this->redirectToRoute('search');
    }

    #[Route('/mailFacture/{id}', name: 'mailFacture')]
    #[IsGranted('ROLE_ADMIN')]
    public function sendEmailFacture(MailerService $mailerService, Devis $devis, TarifRepository $tarifRepo, PrestationRepository $prestaRepo, AssuranceRepository $assuranceRepo)
    {
        $queryTarif = $tarifRepo->findBy(['id' => $devis->getIdTarif()]);
        $tarif = $queryTarif[0];

        $queryPrestation = $prestaRepo->findBy(['id' => $devis->getIdPrestation()]);
        $presta = $queryPrestation[0];

        $queryAssurance = $assuranceRepo->findBy(['id' => $devis->getIdAssurance()]);
        $assurance = $queryAssurance[0];

        $date = date("d.m.y");
        $html = $this->renderView('facture/oneFacture.html.twig', [
            'devis' => $devis,
            'date' => $date,
            'tarif' => $tarif,
            'presta' => $presta,
            'assurance' => $assurance,
            'tva' => 0.20,
        ]);

        $mailerService->emailFacture($devis, $html);
        $this->addFlash('message', 'email bien envoyé');
        return $this->redirectToRoute('search');
    }

    #[Route('/', name: 'accueil')]
    public function showAccueil(Request $request, EntityManagerInterface $manager, MailerService $mailerService, GestionContenuRepository $repoGestion): Response
    {
        $textAccueil = $repoGestion->find(1);

        $verifAdresseArrivee = false;
        $verifDateDeDepart = false;
        $verifDateArrivee = false;
        $verifVilleArrivee = false;
        $verifAdresseDepart = false;
        $verifCodePostalDepart = false;
        $verifVilleDepart = false;
        $verifCodePostalArrivee = false;
        $verifTelephone = false;
        $verifEtageDepart = false;
        $verifPrenom = false;
        $verifEmail = false;
        $verifEtageArrivee = false;
        $verifVolume = false;
        $verifNom = false;
        $messageEmail = "";
        $messageDateDeDepart = "";
        $messageCodePostalDepart = "";
        $messageDateArrivee = "";
        $messageNom = "";
        $messageVolume = '';
        $messagePrenom = "";
        $messageCodePostalArrivee = "";
        $messageTelephone = "";
        $messageVilleDepart = "";
        $messageadresseDepart = "";
        $messageVilleArrivee = "";
        $messageEtageDepart = "";
        $messageEtageArrivee = "";
        $messageadresseArrivee = "";
        $devis = new Devis();
        $form = $this->createForm(DevisType::class, $devis);
        $form->handleRequest($request);
        $dateDeDepart = $form->get('dateDeDepart')->getData();
        $dateArrivee = $form->get('dateArrivee')->getData();
        $CodePostalDepart = $form->get('codePostalDeDepart')->getData();
        $CodePostalArrivee = $form->get('codePostalArrivee')->getData();
        $email = $form->get('email')->getData();
        $nom = $form->get('nom')->getData();
        $prenom = $form->get('prenom')->getData();
        $telephone = $form->get('telephone')->getData();
        $VilleDepart = $form->get('villeDeDepart')->getData();
        $adresseDepart = $form->get('adresseDeDepart')->getData();
        $VilleArrivee = $form->get('villeArrivee')->getData();
        $adresseArrivee = $form->get('adresseArrivee')->getData();
        $etageDeDepart = $form->get('etageDeDepart')->getData();
        $etageArrivee = $form->get('etageArrivee')->getData();
        $volume = $form->get('volume')->getData();
        if ($form->isSubmitted() && $form->isValid()) {

            if (preg_match("/^[0-9\.,]+$/", $volume)) {
                $verifVolume = true;
            } else {
                $messageVolume = "Volume non valide ";
            }

            if (preg_match("/^[0-9 .\/]{0,11}$/", $dateDeDepart)) {
                $verifDateDeDepart = true;
            } else {
                $messageDateDeDepart = "Date de Depart non valide ";
            }

            if (preg_match("/^[0-9 .\/]{0,11}$/", $dateArrivee)) {
                $verifDateArrivee = true;
            } else {
                $messageDateArrivee = "Date d'Arrivée non valide ";
            }

            if (preg_match("/^[0-9]{4,9}$/", $CodePostalDepart)) {
                $verifCodePostalDepart = true;
            } else {
                $messageCodePostalDepart = "Code Postal non valide ";
            }

            if (preg_match("/^[0-9]{4,9}$/", $CodePostalArrivee)) {
                $verifCodePostalArrivee = true;
            } else {
                $messageCodePostalArrivee = "Code Postal non valide ";
            }

            if (preg_match("/^[0-9]{1,2}$/", $etageDeDepart)) {
                $verifEtageDepart = true;
            } else {
                $messageEtageDepart = "Etage Depart non valide ";
            }


            if (preg_match("/^[0-9]{1,2}$/", $etageArrivee)) {
                $verifEtageArrivee = true;
            } else {
                $messageEtageArrivee = "Etage Arrivée non valide ";
            }

            if (preg_match("/^[.\w-]+@[\w]{2,50}\.[\w]{1,50}$/", $email)) {

                $verifEmail = true;
            } else {
                $messageEmail = "E-mail n'est pas valide";
            }

            if (preg_match("/^[a-zA-Z àïëòùèçé-]{1,30}$/", $nom)) {

                $verifNom = true;
            } else {
                $messageNom = " Nom n'est pas valide";
            }

            if (preg_match("/^[a-zA-Z àïëòùèçé-]{1,30}$/", $prenom)) {
                $verifPrenom = true;
            } else {
                $messagePrenom = "Prénom n'est pas valide";
            }
            if (preg_match("/^[0-9]{9,20}$/", $telephone)) {

                $verifTelephone = true;
            } else {
                $messageTelephone = "Télephone n'est pas valide";
            }
            if (preg_match("/^[a-zA-Z àïëòùçèé - ']{1,100}$/", $VilleDepart)) {

                $verifVilleDepart = true;
            } else {
                $messageVilleDepart = "Ville de départ n'est pas valide";
            }
            if (preg_match("/^[0-9a-zA-Z àïëòçùèé  - ']{1,100}$/", $adresseDepart)) {

                $verifAdresseDepart = true;
            } else {
                $messageadresseDepart = "Adresse de départ n'est pas valide";
            }



            if (preg_match("/^[a-zA-Z àïëòçùèé - ']{1,100}$/", $VilleArrivee)) {

                $verifVilleArrivee = true;
            } else {
                $messageVilleArrivee = "Ville d'arivée n'est pas valide";
            }
            if (preg_match("/^[0-9a-zA-Z  àïëòçùèé - ']{1,100}$/", $adresseArrivee)) {

                $verifAdresseArrivee = true;
            } else {
                $messageadresseArrivee = "Adresse d'arivée n'est pas valide";
            }
        }
        if (
            $verifEmail  &&  $verifNom && $verifPrenom && $verifTelephone && $verifVilleDepart &&
            $verifAdresseDepart &&  $verifVilleArrivee &&  $verifAdresseArrivee && $verifDateDeDepart  &&
            $verifDateArrivee && $verifCodePostalDepart && $verifCodePostalArrivee && $verifEtageDepart &&
            $verifEtageArrivee && $verifVolume
        ) {
            $manager->persist($devis);
            $mailerService->mailConfirmationDevis($devis);
            $manager->flush();
            return $this->redirectToRoute('accueil');
        } else {

            return $this->render('accueil/accueil.html.twig', [
                'formView' => $form->createView(),
                'messageEmail' => $messageEmail,
                'messageNom' => $messageNom,
                'messagePrenom' => $messagePrenom,
                'messageTelephone' => $messageTelephone,
                'messageVilleDepart' => $messageVilleDepart,
                'messageadresseDepart' => $messageadresseDepart,
                'messageVilleArrivee' => $messageVilleArrivee,
                'messageadresseArrivee' => $messageadresseArrivee,
                'messageDateDeDepart' => $messageDateDeDepart,
                'messageDateArrivee' => $messageDateArrivee,
                'messageCodePostalDepart' => $messageCodePostalDepart,
                'messageCodePostalArrivee' => $messageCodePostalArrivee,
                'messageEtageDepart' => $messageEtageDepart,
                'messageEtageArrivee' => $messageEtageArrivee,
                'messageVolume' => $messageVolume,
                'textAccueilTM' => $textAccueil->getAccueilTitreMain(),
                'textAccueilTexteM' => $textAccueil->getAccueilTexteMain(),
                'textAccueilTF' => $textAccueil->getAccueilTitreFooter(),
                'textAccueilTexteF' => $textAccueil->getAccueilTexteFooter(),
            ]);
        }
    }
}
