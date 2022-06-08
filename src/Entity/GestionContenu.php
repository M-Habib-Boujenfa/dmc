<?php

namespace App\Entity;

use App\Repository\GestionContenuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GestionContenuRepository::class)]
class GestionContenu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'text', nullable: true)]
    private $demParticuliers;

    #[ORM\Column(type: 'text', nullable: true)]
    private $demTransfertBureaux;

    #[ORM\Column(type: 'text', nullable: true)]
    private $demMonteMeubles;

    #[ORM\Column(type: 'text', nullable: true)]
    private $demGardeMeubles;

    #[ORM\Column(type: 'text', nullable: true)]
    private $demJourDemenagement;

    #[ORM\Column(type: 'text', nullable: true)]
    private $demPreparerDemenagement;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $accueilTitreMain;

    #[ORM\Column(type: 'text', nullable: true)]
    private $accueilTexteMain;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $accueilTitreFooter;

    #[ORM\Column(type: 'text', nullable: true)]
    private $accueilTexteFooter;

    #[ORM\Column(type: 'text', nullable: true)]
    private $devisMain;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDemParticuliers(): ?string
    {
        return $this->demParticuliers;
    }

    public function setDemParticuliers(?string $demParticuliers): self
    {
        $this->demParticuliers = $demParticuliers;

        return $this;
    }

    public function getDemTransfertBureaux(): ?string
    {
        return $this->demTransfertBureaux;
    }

    public function setDemTransfertBureaux(?string $demTransfertBureaux): self
    {
        $this->demTransfertBureaux = $demTransfertBureaux;

        return $this;
    }

    public function getDemMonteMeubles(): ?string
    {
        return $this->demMonteMeubles;
    }

    public function setDemMonteMeubles(?string $demMonteMeubles): self
    {
        $this->demMonteMeubles = $demMonteMeubles;

        return $this;
    }

    public function getDemGardeMeubles(): ?string
    {
        return $this->demGardeMeubles;
    }

    public function setDemGardeMeubles(?string $demGardeMeubles): self
    {
        $this->demGardeMeubles = $demGardeMeubles;

        return $this;
    }

    public function getDemJourDemenagement(): ?string
    {
        return $this->demJourDemenagement;
    }

    public function setDemJourDemenagement(?string $demJourDemenagement): self
    {
        $this->demJourDemenagement = $demJourDemenagement;

        return $this;
    }

    public function getDemPreparerDemenagement(): ?string
    {
        return $this->demPreparerDemenagement;
    }

    public function setDemPreparerDemenagement(?string $demPreparerDemenagement): self
    {
        $this->demPreparerDemenagement = $demPreparerDemenagement;

        return $this;
    }

    public function getAccueilTitreMain(): ?string
    {
        return $this->accueilTitreMain;
    }

    public function setAccueilTitreMain(?string $accueilTitreMain): self
    {
        $this->accueilTitreMain = $accueilTitreMain;

        return $this;
    }

    public function getAccueilTexteMain(): ?string
    {
        return $this->accueilTexteMain;
    }

    public function setAccueilTexteMain(?string $accueilTexteMain): self
    {
        $this->accueilTexteMain = $accueilTexteMain;

        return $this;
    }

    public function getAccueilTitreFooter(): ?string
    {
        return $this->accueilTitreFooter;
    }

    public function setAccueilTitreFooter(?string $accueilTitreFooter): self
    {
        $this->accueilTitreFooter = $accueilTitreFooter;

        return $this;
    }

    public function getAccueilTexteFooter(): ?string
    {
        return $this->accueilTexteFooter;
    }

    public function setAccueilTexteFooter(?string $accueilTexteFooter): self
    {
        $this->accueilTexteFooter = $accueilTexteFooter;

        return $this;
    }

    public function getDevisMain(): ?string
    {
        return $this->devisMain;
    }

    public function setDevisMain(?string $devisMain): self
    {
        $this->devisMain = $devisMain;

        return $this;
    }
}
