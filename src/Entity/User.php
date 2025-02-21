<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    #[Assert\NotBlank(message: 'Please enter an email.')]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: 'Name cannot be blank.')]
    #[Assert\Length(min: 2, max: 255, minMessage: 'Name must be at least 2 characters long.')]
    private ?string $name = null;

    #[ORM\Column(type: "integer", nullable: true)]
    #[Assert\Positive(message: 'Age must be a positive number.')]
    #[Assert\LessThan(value: 100, message: 'Age must be realistic.')]
    private ?int $age = null;

    #[ORM\Column(type: "string", length: 15, nullable: true)]
    #[Assert\Regex(pattern: '/^\+?[0-9]{8,15}$/', message: 'Invalid phone number format.')]
    private ?string $phoneNumber = null;

    #[ORM\Column(type: "string", length: 100, nullable: true)]
    #[Assert\Length(max: 100, maxMessage: 'Country name is too long.')]
    private ?string $country = null;

    #[ORM\Column(type: "string", length: 100, nullable: true)]
    #[Assert\Length(max: 100, maxMessage: 'Therapy type name is too long.')]
    private ?string $therapyType = null;

    /**
     * Temporary field for plain password during registration.
     */
    #[Assert\NotBlank(message: 'Password cannot be blank.', groups: ['Registration'])]
    #[Assert\Length(min: 6, minMessage: 'Password must be at least 6 characters long.')]
    private ?string $plainPassword = null;

    // Email verification fields

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $verificationToken = null;

    #[ORM\Column(type: "boolean")]
    private ?bool $isVerified = false;

    // Doctor-specific fields
    #[ORM\Column(type: "string", length: 100, nullable: true)]
    private ?string $doctorType = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $diploma = null;

    // Forgot password fields

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $passwordResetToken = null;

    #[ORM\Column(type: "datetime", nullable: true)]
    #[Assert\NotBlank(message: "Please select an appointment date.")]
    private ?\DateTimeInterface $passwordResetRequestedAt = null;


    #[ORM\OneToMany(mappedBy: "user", targetEntity: Appointment::class, cascade: ["remove"])]
    private Collection $appointments;

    // Getters and Setters

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function eraseCredentials(): void
    {
        $this->plainPassword = null;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;
        return $this;
    }

    public function getTherapyType(): ?string
    {
        return $this->therapyType;
    }

    public function setTherapyType(string $therapyType): static
    {
        $this->therapyType = $therapyType;
        return $this;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(string $plainPassword): static
    {
        $this->plainPassword = $plainPassword;
        return $this;
    }

    public function getVerificationToken(): ?string
    {
        return $this->verificationToken;
    }

    public function setVerificationToken(?string $verificationToken): self
    {
        $this->verificationToken = $verificationToken;
        return $this;
    }

    public function getIsVerified(): bool
    {
        return (bool) $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;
        return $this;
    }

    // Forgot password getters and setters

    public function getPasswordResetToken(): ?string
    {
        return $this->passwordResetToken;
    }

    public function setPasswordResetToken(?string $passwordResetToken): self
    {
        $this->passwordResetToken = $passwordResetToken;
        return $this;
    }

    public function getPasswordResetRequestedAt(): ?\DateTimeInterface
    {
        return $this->passwordResetRequestedAt;
    }

    public function setPasswordResetRequestedAt(?\DateTimeInterface $passwordResetRequestedAt): self
    {
        $this->passwordResetRequestedAt = $passwordResetRequestedAt;
        return $this;
    }


    public function getDoctorType(): ?string
    {
        return $this->doctorType;
    }
    public function setDoctorType(?string $doctorType): self
    {
        $this->doctorType = $doctorType;
        return $this;
    }

    public function getDiploma(): ?string
    {
        return $this->diploma;
    }
    public function setDiploma(?string $diploma): self
    {
        $this->diploma = $diploma;
        return $this;
    }

    public function getAppointments(): Collection
    {
        return $this->appointments;
    }

    public function addAppointment(Appointment $appointment): self
    {
        if (!$this->appointments->contains($appointment)) {
            $this->appointments->add($appointment);
            $appointment->setUser($this);
        }
        return $this;
    }

    public function removeAppointment(Appointment $appointment): self
    {
        if ($this->appointments->removeElement($appointment)) {
            if ($appointment->getUser() === $this) {
                $appointment->setUser(null);
            }
        }
        return $this;
    }
}
