<?php

namespace App\Entity;

use App\Repository\PlanningRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PlanningRepository::class)]
class Planning
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'integer', nullable: false)]
    private int $idDoctor;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Le jour de la semaine est obligatoire.")]
    private ?string $jour = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotNull(message: "L'heure de début est obligatoire.")]
    private ?\DateTimeInterface $heureDebut = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotNull(message: "L'heure de fin est obligatoire.")]
    private ?\DateTimeInterface $heureFin = null;

    #[ORM\Column(type: 'integer', nullable: false)]
    #[Assert\NotNull(message: "Le nombre de places disponibles est obligatoire.")]
    private int $placesDisponibles;

    #[ORM\Column(type: 'integer', nullable: false)]
    private int $rendezvousPris = 0;

    #[ORM\Column(type: 'integer', nullable: false)]
    private int $placesRestantes;

    #[ORM\OneToMany(mappedBy: 'planning', targetEntity: Appointment::class)]
    private iterable $rendezvous;

    public function __construct()
    {
        $this->placesRestantes = $this->placesDisponibles;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDoctor(): int
    {
        return $this->idDoctor;
    }

    public function setIdDoctor(int $idDoctor): static
    {
        $this->idDoctor = $idDoctor;
        return $this;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(string $jour): static
    {
        $this->jour = $jour;
        return $this;
    }

    public function getHeureDebut(): ?\DateTimeInterface
    {
        return $this->heureDebut;
    }

    public function setHeureDebut(\DateTimeInterface $heureDebut): static
    {
        $this->heureDebut = $heureDebut;
        return $this;
    }

    public function getHeureFin(): ?\DateTimeInterface
    {
        return $this->heureFin;
    }

    public function setHeureFin(\DateTimeInterface $heureFin): static
    {
        $this->heureFin = $heureFin;
        return $this;
    }

    public function getPlacesDisponibles(): int
    {
        return $this->placesDisponibles;
    }

    public function setPlacesDisponibles(int $placesDisponibles): static
    {
        $this->placesDisponibles = $placesDisponibles;
        $this->placesRestantes = $placesDisponibles - $this->rendezvousPris;
        return $this;
    }

    public function getRendezvousPris(): int
    {
        return $this->rendezvousPris;
    }

    public function setRendezvousPris(int $rendezvousPris): static
    {
        $this->rendezvousPris = $rendezvousPris;
        $this->placesRestantes = $this->placesDisponibles - $rendezvousPris;
        return $this;
    }

    public function getPlacesRestantes(): int
    {
        return $this->placesRestantes;
    }

    public function verifierDisponibilite(): bool
    {
        return $this->placesRestantes > 0;
    }

    public function ajouterRendezvous(): bool
    {
        if ($this->verifierDisponibilite()) {
            $this->rendezvousPris++;
            $this->placesRestantes--;
            return true;
        }
        return false;
    }

    public function getRendezvous(): iterable
    {
        return $this->rendezvous;
    }

    public function __toString(): string
    {
        return $this->jour . ' ' . $this->heureDebut->format('H:i') . ' - ' . $this->heureFin->format('H:i');
    }
}