<?php

namespace App\Entity;

use App\Repository\MedicamentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicamentRepository::class)]
class Medicament
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $dosage = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column(type: Types::BLOB)]
    private $imageurl = null;

    /**
     * @var Collection<int, Pharmacie>
     */
    #[ORM\ManyToMany(targetEntity: Pharmacie::class, inversedBy: 'medicaments')]
    private Collection $id_pharmacie;

    public function __construct()
    {
        $this->id_pharmacie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDosage(): ?int
    {
        return $this->dosage;
    }

    public function setDosage(int $dosage): static
    {
        $this->dosage = $dosage;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImageurl()
    {
        return $this->imageurl;
    }

    public function setImageurl($imageurl): static
    {
        $this->imageurl = $imageurl;

        return $this;
    }

    /**
     * @return Collection<int, Pharmacie>
     */
    public function getIdPharmacie(): Collection
    {
        return $this->id_pharmacie;
    }

    public function addIdPharmacie(pharmacie $idPharmacie): static
    {
        if (!$this->id_pharmacie->contains($idPharmacie)) {
            $this->id_pharmacie->add($idPharmacie);
        }

        return $this;
    }

    public function removeIdPharmacie(pharmacie $idPharmacie): static
    {
        $this->id_pharmacie->removeElement($idPharmacie);

        return $this;
    }
}
