<?php

namespace App\Entity;

use App\Repository\AppointmentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: AppointmentRepository::class)]
class Appointment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'integer', nullable: false)]
    private int $idPatient;

    #[ORM\Column(type: 'integer', nullable: false)]
    private int $idDoctor;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom du patient est obligatoire.")]
    #[Assert\Length(max: 255, maxMessage: "Le nom du patient ne doit pas dépasser 255 caractères.")]
    private ?string $nomPatient = null;

    #[ORM\Column(length: 255)]
    #[Assert\Email(
        message: "L'email fourni n'est pas valide.",
        mode: "strict"
    )]
    private ?string $email = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: "La date du rendez-vous est obligatoire.")]
    #[Assert\Type(type: \DateTimeInterface::class, message: "Format de date invalide.")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: 'string', length: 5)]
    private ?string $heure = null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le type de consultation est obligatoire.")]
    private ?string $typeConsultation = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    private ?string $statut = null;

    #[ORM\ManyToOne(inversedBy: 'rendezvous')]
    private ?Planning $planning = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPatient(): int
    {
        return $this->idPatient;
    }

    public function setIdPatient(int $idPatient): self
    {
        $this->idPatient = $idPatient;
        return $this;
    }

    public function getIdDoctor(): int
    {
        return $this->idDoctor;
    }

    public function setIdDoctor(int $idDoctor): self
    {
        $this->idDoctor = $idDoctor;
        return $this;
    }
    public function getNomPatient(): ?string
    {
        return $this->nomPatient;
    }

    public function setNomPatient(string $nomPatient): static
    {
        $this->nomPatient = $nomPatient;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getHeure(): ?string
    {
        return $this->heure;
    }

    public function setHeure(?string $heure): static
    {
        $allowedHours = ['08:00', '10:00', '12:00', '14:00', '16:00'];

        if (!in_array($heure, $allowedHours)) {
            throw new \InvalidArgumentException("L'heure du rendez-vous doit être l'une des heures suivantes : 08:00, 10:00, 12:00, 14:00, 16:00.");
        }

        $this->heure = $heure;
        return $this;
    }

    public function getTypeConsultation(): ?string
    {
        return $this->typeConsultation;
    }

    public function setTypeConsultation(string $typeConsultation): static
    {
        $this->typeConsultation = $typeConsultation;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getPlanning(): ?Planning
    {
        return $this->planning;
    }

    public function setPlanning(?Planning $planning): static
    {
        $this->planning = $planning;

        return $this;
    }
}