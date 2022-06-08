<?php

namespace App\Entity;

use App\Repository\DevisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DevisRepository::class)]
class Devis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $prenom;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\Column(type: 'string', length: 255)]
    private $telephone;

    #[ORM\Column(type: 'string', nullable: true)]
    private $dateDeDepart;

    #[ORM\Column(type: 'string', length: 255)]
    private $adresseDeDepart;

    #[ORM\Column(type: 'string', length: 255)]
    private $codePostalDeDepart;

    #[ORM\Column(type: 'string', length: 255)]
    private $villeDeDepart;

    #[ORM\Column(type: 'integer')]
    private $etageDeDepart;

    #[ORM\Column(type: 'string', length: 255)]
    private $ascenseurDepart;

    #[ORM\Column(type: 'string', nullable: true)]
    private $dateArrivee;

    #[ORM\Column(type: 'string', length: 255)]
    private $adresseArrivee;

    #[ORM\Column(type: 'integer')]
    private $codePostalArrivee;

    #[ORM\Column(type: 'string', length: 255)]
    private $villeArrivee;

    #[ORM\Column(type: 'integer')]
    private $etageArrivee;

    #[ORM\Column(type: 'string', length: 255)]
    private $ascenseurArrivee;

    #[ORM\Column(type: 'float')]
    private $volume;

    #[ORM\Column(type: 'text')]
    private $message;

    #[ORM\ManyToOne(targetEntity: Assurance::class, inversedBy: 'devis')]
    #[ORM\JoinColumn(nullable: true)]
    private $idAssurance;

    #[ORM\ManyToOne(targetEntity: Tarif::class, inversedBy: 'devis')]
    #[ORM\JoinColumn(nullable: true)]
    private $idTarif;

    #[ORM\ManyToOne(targetEntity: Prestation::class, inversedBy: 'devis')]
    #[ORM\JoinColumn(nullable: true)]
    private $idPrestation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getDateDeDepart(): ?string
    {
        return $this->dateDeDepart;
    }

    public function setDateDeDepart(string $dateDeDepart): self
    {
        $this->dateDeDepart = $dateDeDepart;

        return $this;
    }

    public function getAdresseDeDepart(): ?string
    {
        return $this->adresseDeDepart;
    }

    public function setAdresseDeDepart(string $adresseDeDepart): self
    {
        $this->adresseDeDepart = $adresseDeDepart;

        return $this;
    }

    public function getCodePostalDeDepart(): ?string
    {
        return $this->codePostalDeDepart;
    }

    public function setCodePostalDeDepart(string $codePostalDeDepart): self
    {
        $this->codePostalDeDepart = $codePostalDeDepart;

        return $this;
    }

    public function getVilleDeDepart(): ?string
    {
        return $this->villeDeDepart;
    }

    public function setVilleDeDepart(string $villeDeDepart): self
    {
        $this->villeDeDepart = $villeDeDepart;

        return $this;
    }

    public function getEtageDeDepart(): ?int
    {
        return $this->etageDeDepart;
    }

    public function setEtageDeDepart(int $etageDeDepart): self
    {
        $this->etageDeDepart = $etageDeDepart;

        return $this;
    }

    public function getAscenseurDepart(): ?string
    {
        return $this->ascenseurDepart;
    }

    public function setAscenseurDepart(string $ascenseurDepart): self
    {
        $this->ascenseurDepart = $ascenseurDepart;

        return $this;
    }

    public function getDateArrivee(): ?string
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(string $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getAdresseArrivee(): ?string
    {
        return $this->adresseArrivee;
    }

    public function setAdresseArrivee(string $adresseArrivee): self
    {
        $this->adresseArrivee = $adresseArrivee;

        return $this;
    }

    public function getCodePostalArrivee(): ?int
    {
        return $this->codePostalArrivee;
    }

    public function setCodePostalArrivee(int $codePostalArrivee): self
    {
        $this->codePostalArrivee = $codePostalArrivee;

        return $this;
    }

    public function getVilleArrivee(): ?string
    {
        return $this->villeArrivee;
    }

    public function setVilleArrivee(string $villeArrivee): self
    {
        $this->villeArrivee = $villeArrivee;

        return $this;
    }

    public function getEtageArrivee(): ?int
    {
        return $this->etageArrivee;
    }

    public function setEtageArrivee(int $etageArrivee): self
    {
        $this->etageArrivee = $etageArrivee;

        return $this;
    }

    public function getAscenseurArrivee(): ?string
    {
        return $this->ascenseurArrivee;
    }

    public function setAscenseurArrivee(string $ascenseurArrivee): self
    {
        $this->ascenseurArrivee = $ascenseurArrivee;

        return $this;
    }

    public function getVolume(): ?float
    {
        return $this->volume;
    }

    public function setVolume(float $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getIdAssurance(): ?Assurance
    {
        return $this->idAssurance;
    }

    public function setIdAssurance(?Assurance $idAssurance): self
    {
        $this->idAssurance = $idAssurance;

        return $this;
    }

    public function getIdTarif(): ?Tarif
    {
        return $this->idTarif;
    }

    public function setIdTarif(?Tarif $idTarif): self
    {
        $this->idTarif = $idTarif;

        return $this;
    }

    public function getIdPrestation(): ?Prestation
    {
        return $this->idPrestation;
    }

    public function setIdPrestation(?Prestation $idPrestation): self
    {
        $this->idPrestation = $idPrestation;

        return $this;
    }
}
