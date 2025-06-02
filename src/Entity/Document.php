<?php
// src/Entity/Document.php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use App\Entity\Role;
use App\Entity\UserTag;
use App\Entity\DocumentLog;

#[ORM\Entity(repositoryClass: DocumentRepository::class)]
class Document
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $filename = null;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $uploadDate;

    /**
     * If true, everyone can view. If false, only explicit roles/tags/users.
     */
    #[ORM\Column]
    private bool $public = true;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(
        name: "uploaded_by_id",
        referencedColumnName: "id",
        nullable: true,
        onDelete: "SET NULL"
    )]
    private ?User $uploadedBy = null;

    /**
     * @var Collection<int, Role>
     * When public = false, restrict viewing to these Roles.
     */
    #[ORM\ManyToMany(targetEntity: Role::class)]
    #[ORM\JoinTable(name: 'document_target_roles')]
    private Collection $targetRoles;

    /**
     * @var Collection<int, UserTag>
     * When public = false, restrict viewing to these UserTags.
     */
    #[ORM\ManyToMany(targetEntity: UserTag::class)]
    #[ORM\JoinTable(name: 'document_target_tags')]
    private Collection $targetTags;

    /**
     * @var Collection<int, User>
     * When public = false, restrict viewing to these Users.
     */
    #[ORM\ManyToMany(targetEntity: User::class)]
    #[ORM\JoinTable(name: 'document_target_users')]
    private Collection $targetUsers;

    /**
     * @var Collection<int, DocumentLog>
     * Logs of “view”, “edit”, “delete” actions.
     */
    #[ORM\OneToMany(targetEntity: DocumentLog::class, mappedBy: 'document', cascade: ['persist', 'remove'])]
    private Collection $logs;

    public function __construct()
    {
        $this->targetRoles = new ArrayCollection();
        $this->targetTags = new ArrayCollection();
        $this->targetUsers = new ArrayCollection();
        $this->logs = new ArrayCollection();

        $this->uploadDate = new \DateTimeImmutable();
        $this->public = true;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): static
    {
        $this->filename = $filename;
        return $this;
    }

    public function getUploadDate(): \DateTimeInterface
    {
        return $this->uploadDate;
    }

    public function setUploadDate(\DateTimeInterface $uploadDate): static
    {
        $this->uploadDate = $uploadDate;
        return $this;
    }

    public function isPublic(): bool
    {
        return $this->public;
    }

    public function setPublic(bool $public): static
    {
        $this->public = $public;
        return $this;
    }

    public function getUploadedBy(): ?User
    {
        return $this->uploadedBy;
    }

    public function setUploadedBy(?User $user): static
    {
        $this->uploadedBy = $user;
        return $this;
    }

    /**
     * @return Collection<int, Role>
     */
    public function getTargetRoles(): Collection
    {
        return $this->targetRoles;
    }

    public function addTargetRole(Role $role): static
    {
        if (!$this->targetRoles->contains($role)) {
            $this->targetRoles->add($role);
        }
        return $this;
    }

    public function removeTargetRole(Role $role): static
    {
        $this->targetRoles->removeElement($role);
        return $this;
    }

    /**
     * @return Collection<int, UserTag>
     */
    public function getTargetTags(): Collection
    {
        return $this->targetTags;
    }

    public function addTargetTag(UserTag $tag): static
    {
        if (!$this->targetTags->contains($tag)) {
            $this->targetTags->add($tag);
        }
        return $this;
    }

    public function removeTargetTag(UserTag $tag): static
    {
        $this->targetTags->removeElement($tag);
        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getTargetUsers(): Collection
    {
        return $this->targetUsers;
    }

    public function addTargetUser(User $user): static
    {
        if (!$this->targetUsers->contains($user)) {
            $this->targetUsers->add($user);
        }
        return $this;
    }

    public function removeTargetUser(User $user): static
    {
        $this->targetUsers->removeElement($user);
        return $this;
    }

    /**
     * @return Collection<int, DocumentLog>
     */
    public function getLogs(): Collection
    {
        return $this->logs;
    }

    public function addLog(DocumentLog $log): static
    {
        if (!$this->logs->contains($log)) {
            $this->logs->add($log);
            $log->setDocument($this);
        }
        return $this;
    }

    public function removeLog(DocumentLog $log): static
    {
        if ($this->logs->removeElement($log)) {
            if ($log->getDocument() === $this) {
                $log->setDocument(null);
            }
        }
        return $this;
    }
}
