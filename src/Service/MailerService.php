<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class MailerService
{

    public function __construct(private MailerInterface $mailer, private PdfService $pdfService)
    {
    }

    public function emailDevis($devis, $html): void
    {
        $genpdf =  $this->pdfService->genPdfFile($html);

        $email = (new TemplatedEmail())
            ->from('contact.demenager.moins.cher@gmail.com')
            ->to($devis->getEmail())
            ->subject("Votre Devis")
            ->attach($genpdf, "Devis n°{$devis->getId()} {$devis->getNom()}.pdf", 'application/pdf')
            ->htmlTemplate('email/templateDevis.html.twig')
            ->context([
                'devis' => $devis
            ]);

        $this->mailer->send($email);
    }


    public function emailFacture($devis, $html): void
    {
        $genpdf =  $this->pdfService->genPdfFile($html);

        $email = (new TemplatedEmail())
            ->from('contact.demenager.moins.cher@gmail.com')
            ->to($devis->getEmail())
            ->subject("Votre Facture")
            ->attach($genpdf, "Facture n°{$devis->getId()} {$devis->getNom()}.pdf", 'application/pdf')
            ->htmlTemplate('email/templateFacture.html.twig')
            ->context([
                'devis' => $devis
            ]);

        $this->mailer->send($email);
    }

    public function mailConfirmationDevis($devis): void
    {


        $confirmation = (new TemplatedEmail())
            ->from('contact.demenager.moins.cher@gmail.com')
            ->to($devis->getEmail())
            ->subject("Votre confirmation ")
            ->htmlTemplate('email/templateDemandeDevis.html.twig')
            ->context([
                'devis' => $devis
            ]);
        $this->mailer->send($confirmation);
    }
}
