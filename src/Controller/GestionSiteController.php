<?php

namespace App\Controller;

use App\Entity\GestionContenu;
use App\Repository\GestionContenuRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionSiteController extends AbstractController
{
    #[Route('/gestion', name: 'gestion')]
    public function index(GestionContenuRepository $repoGestionContenu, Request $request, EntityManagerInterface $manager): Response
    {
        /** select table gestion contenue */
        $textDem = $repoGestionContenu->find(1);

        /** form Particulier */
        $formParticuliers = $this->createFormBuilder()
            ->add('particulier', CKEditorType::class, [
                "data" => $textDem->getDemParticuliers(),
                "label" => false,
            ])
            ->getForm();
        $formParticuliers->handleRequest($request);
        /** @todo recuperer en base les texte de chaque page  */
        if ($formParticuliers->isSubmitted() && $formParticuliers->isValid()) {
            $textModifie = $request->get("form")["particulier"];
            $textDem->setDemParticuliers($textModifie);
            $manager->persist($textDem);
            $manager->flush();
            return $this->redirectToRoute('particuliers');
        }

        /** form Transfert */
        $formTransfert = $this->createFormBuilder()
            ->add('transfert', CKEditorType::class, [
                "data" => $textDem->getDemTransfertBureaux(),
                "label" => false,
            ])
            ->getForm();
        $formTransfert->handleRequest($request);
        /** @todo recuperer en base les texte de chaque page  */
        if ($formTransfert->isSubmitted() && $formTransfert->isValid()) {
            $textModifie = $request->get("form")["transfert"];
            $textDem->setDemTransfertBureaux($textModifie);
            $manager->persist($textDem);
            $manager->flush();
            return $this->redirectToRoute('transfertDeBureaux');
        }


        /** form Monte Meubles */
        $formMonteMeubles = $this->createFormBuilder()
            ->add('monteMeuble', CKEditorType::class, [
                "data" => $textDem->getDemMonteMeubles(),
                "label" => false,
            ])
            ->getForm();
        $formMonteMeubles->handleRequest($request);
        /** @todo recuperer en base les texte de chaque page  */
        if ($formMonteMeubles->isSubmitted() && $formMonteMeubles->isValid()) {
            $textModifie = $request->get("form")["monteMeuble"];
            $textDem->setDemMonteMeubles($textModifie);
            $manager->persist($textDem);
            $manager->flush();
            return $this->redirectToRoute('monteMeubles');
        }


        /** form Garde Meubles */
        $formGardeMeubles = $this->createFormBuilder()
            ->add('gardeMeubles', CKEditorType::class, [
                "data" => $textDem->getDemGardeMeubles(),
                "label" => false,
            ])
            ->getForm();
        $formGardeMeubles->handleRequest($request);
        /** @todo recuperer en base les texte de chaque page  */
        if ($formGardeMeubles->isSubmitted() && $formGardeMeubles->isValid()) {
            $textModifie = $request->get("form")["gardeMeubles"];
            $textDem->setDemGardeMeubles($textModifie);
            $manager->persist($textDem);
            $manager->flush();
            return $this->redirectToRoute('gardeMeubles');
        }


        /** form jour du demenagement */
        $formJourDem = $this->createFormBuilder()
            ->add('jourDem', CKEditorType::class, [
                "data" => $textDem->getDemJourDemenagement(),
                "label" => false,
            ])
            ->getForm();
        $formJourDem->handleRequest($request);
        /** @todo recuperer en base les texte de chaque page  */
        if ($formJourDem->isSubmitted() && $formJourDem->isValid()) {
            $textModifie = $request->get("form")["jourDem"];
            $textDem->setDemJourDemenagement($textModifie);
            $manager->persist($textDem);
            $manager->flush();
            return $this->redirectToRoute('jourDuDemenagement');
        }


        /** form preparation */
        $formPreparation = $this->createFormBuilder()
            ->add('preparation', CKEditorType::class, [
                "data" => $textDem->getDemPreparerDemenagement(),
                "label" => false,
            ])
            ->getForm();
        $formPreparation->handleRequest($request);
        /** @todo recuperer en base les texte de chaque page  */
        if ($formPreparation->isSubmitted() && $formPreparation->isValid()) {
            $textModifie = $request->get("form")["preparation"];
            $textDem->setDemPreparerDemenagement($textModifie);
            $manager->persist($textDem);
            $manager->flush();
            return $this->redirectToRoute('preparerVotreDemenagement');
        }


        /** form accueil titre main */
        $formAccueilTM = $this->createFormBuilder()
            ->add('accueilTM', CKEditorType::class, [
                "data" => $textDem->getAccueilTitreMain(),
                "label" => false,
            ])
            ->getForm();
        $formAccueilTM->handleRequest($request);
        /** @todo recuperer en base les texte de chaque page  */
        if ($formAccueilTM->isSubmitted() && $formAccueilTM->isValid()) {
            $textModifie = $request->get("form")["accueilTM"];
            $textDem->setAccueilTitreMain($textModifie);
            $manager->persist($textDem);
            $manager->flush();
            return $this->redirectToRoute('accueil');
        }


        /** form accueil texte main */
        $formAccueilTextM = $this->createFormBuilder()
            ->add('accueilTextM', CKEditorType::class, [
                "data" => $textDem->getAccueilTexteMain(),
                "label" => false,
            ])
            ->getForm();
        $formAccueilTextM->handleRequest($request);
        /** @todo recuperer en base les texte de chaque page  */
        if ($formAccueilTextM->isSubmitted() && $formAccueilTextM->isValid()) {
            $textModifie = $request->get("form")["accueilTextM"];
            $textDem->setAccueilTexteMain($textModifie);
            $manager->persist($textDem);
            $manager->flush();
            return $this->redirectToRoute('accueil');
        }


        /** form accueil titre footer */
        $formAccueilTF = $this->createFormBuilder()
            ->add('accueilTF', CKEditorType::class, [
                "data" => $textDem->getAccueilTitreFooter(),
                "label" => false,
            ])
            ->getForm();
        $formAccueilTF->handleRequest($request);
        /** @todo recuperer en base les texte de chaque page  */
        if ($formAccueilTF->isSubmitted() && $formAccueilTF->isValid()) {
            $textModifie = $request->get("form")["accueilTF"];
            $textDem->setAccueilTitreFooter($textModifie);
            $manager->persist($textDem);
            $manager->flush();
            return $this->redirectToRoute('accueil');
        }


        /** form accueil texte footer */
        $formAccueilTexteF = $this->createFormBuilder()
            ->add('accueilTexteF', CKEditorType::class, [
                "data" => $textDem->getAccueilTexteFooter(),
                "label" => false,
            ])
            ->getForm();
        $formAccueilTexteF->handleRequest($request);
        /** @todo recuperer en base les texte de chaque page  */
        if ($formAccueilTexteF->isSubmitted() && $formAccueilTexteF->isValid()) {
            $textModifie = $request->get("form")["accueilTexteF"];
            $textDem->setAccueilTexteFooter($textModifie);
            $manager->persist($textDem);
            $manager->flush();
            return $this->redirectToRoute('accueil');
        }


        /** form devis texte */
        $formDevisMain = $this->createFormBuilder()
            ->add('devisMain', CKEditorType::class, [
                "data" => $textDem->getDevisMain(),
                "label" => false,
            ])
            ->getForm();
        $formDevisMain->handleRequest($request);
        /** @todo recuperer en base les texte de chaque page  */
        if ($formDevisMain->isSubmitted() && $formDevisMain->isValid()) {
            $textModifie = $request->get("form")["devisMain"];
            $textDem->setDevisMain($textModifie);
            $manager->persist($textDem);
            $manager->flush();
            return $this->redirectToRoute('devis');
        }


        return $this->renderForm('gestion_site/index.html.twig', [
            'formParticuliers' => $formParticuliers,
            'formTransfert' => $formTransfert,
            'formMonteMeubles' => $formMonteMeubles,
            'formGardeMeubles' => $formGardeMeubles,
            'formJourDem' => $formJourDem,
            'formPreparation' => $formPreparation,
            'formAccueilTM' => $formAccueilTM,
            'formAccueilTextM' => $formAccueilTextM,
            'formAccueilTF' => $formAccueilTF,
            'formAccueilTexteF' => $formAccueilTexteF,
            'formDevisMain' => $formDevisMain,
        ]);
    }
}
