<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Comment content cannot be empty")]
    #[Assert\Length(
        min: 3,
        max: 5000,
        minMessage: "Comment must be at least {{ limit }} characters",
        maxMessage: "Comment cannot be longer than {{ limit }} characters"
    )]
    private ?string $comm_content = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Author name cannot be empty")]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: "Author name must be at least {{ limit }} characters",
        maxMessage: "Author name cannot be longer than {{ limit }} characters"
    )]
    private ?string $comm_auteur = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $comm_date = null;

    #[ORM\ManyToOne(targetEntity: Post::class, inversedBy: 'comments')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Post $post = null;

    #[ORM\ManyToOne(targetEntity: self::class, inversedBy: 'replies')]
    #[ORM\JoinColumn(name: 'parent_id', onDelete: 'CASCADE')]
    private ?self $parent = null;

    #[ORM\OneToMany(mappedBy: 'parent', targetEntity: self::class, cascade: ['remove'], orphanRemoval: true)]
    private Collection $replies;

    public function __construct()
    {
        $this->replies = new ArrayCollection();
        $this->comm_date = new \DateTime();
        $this->parent = null;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommContent(): ?string
    {
        return $this->comm_content;
    }

    public function setCommContent(string $comm_content): static
    {
        $this->comm_content = $comm_content;
        return $this;
    }

    public function getCommAuteur(): ?string
    {
        return $this->comm_auteur;
    }

    public function setCommAuteur(string $comm_auteur): static
    {
        $this->comm_auteur = $comm_auteur;
        return $this;
    }

    public function getCommDate(): ?\DateTimeInterface
    {
        return $this->comm_date;
    }

    public function setCommDate(\DateTimeInterface $comm_date): static
    {
        $this->comm_date = $comm_date;
        return $this;
    }

    public function getPost(): ?Post
    {
        return $this->post;
    }

    public function setPost(?Post $post): static
    {
        $this->post = $post;
        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): static
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getReplies(): Collection
    {
        return $this->replies;
    }

    public function addReply(self $reply): static
    {
        if (!$this->replies->contains($reply)) {
            $this->replies->add($reply);
            $reply->setParent($this);
        }
        return $this;
    }

    public function removeReply(self $reply): static
    {
        if ($this->replies->removeElement($reply)) {
            // set the owning side to null (unless already changed)
            if ($reply->getParent() === $this) {
                $reply->setParent(null);
            }
        }
        return $this;
    }

    // Helper method for nested comments
    public function isReply(): bool
    {
        return $this->parent !== null;
    }
}