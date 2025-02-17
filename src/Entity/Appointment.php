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

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    #[Assert\NotNull(message: "L'heure est obligatoire.")]
    private ?\DateTimeInterface $heure = null;
    
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le type de consultation est obligatoire.")]
    private ?string $typeConsultation = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    private ?string $statut = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(?\DateTimeInterface $heure): static
    {
        if ($heure !== null) {
            $heureFormat = $heure->format('H:i'); 
    
            if ($heureFormat < "08:00" || $heureFormat > "17:00") {
                throw new \InvalidArgumentException("L'heure du rendez-vous doit être comprise entre 08:00 et 17:00.");
            }
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
}
