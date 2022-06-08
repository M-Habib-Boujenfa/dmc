<?php

namespace App\Entity;

use App\Repository\TarifRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TarifRepository::class)]
class Tarif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string')]
    private $date;

    #[ORM\Column(type: 'text', nullable: true)]
    private $commentaire;

    #[ORM\Column(type: 'float', nullable: true)]
    private $acompte;

    #[ORM\Column(type: 'float')]
    private $tarifHt;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'tarif')]
    #[ORM\JoinColumn(nullable: false)]
    private $idUser;

    #[ORM\OneToMany(mappedBy: 'idTarif', targetEntity: Devis::class)]
    private $devis;

    public function __construct()
    {
        $this->devis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getAcompte(): ?float
    {
        return $this->acompte;
    }

    public function setAcompte(float $acompte): self
    {
        $this->acompte = $acompte;

        return $this;
    }

    public function getTarifHt(): ?float
    {
        return $this->tarifHt;
    }

    public function setTarifHt(float $tarifHt): self
    {
        $this->tarifHt = $tarifHt;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->idUser;
    }

    public function setIdUser(?User $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * @return Collection<int, Devis>
     */
    public function getDevis(): Collection
    {
        return $this->devis;
    }

    public function addDevi(Devis $devi): self
    {
        if (!$this->devis->contains($devi)) {
            $this->devis[] = $devi;
            $devi->setIdTarif($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): self
    {
        if ($this->devis->removeElement($devi)) {
            // set the owning side to null (unless already changed)
            if ($devi->getIdTarif() === $this) {
                $devi->setIdTarif(null);
            }
        }

        return $this;
    }
}
