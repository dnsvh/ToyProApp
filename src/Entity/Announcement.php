<?php
namespace App\Entity;

use App\Repository\AnnouncementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use App\Entity\Role;
use App\Entity\UserTag;

#[ORM\Entity(repositoryClass: AnnouncementRepository::class)]
class Announcement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $title;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $content = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imagePath = null;

    #[ORM\Column]
    private bool $infoboard = false;

    #[ORM\Column]
    private bool $commentsEnabled = false;

    #[ORM\Column]
    private bool $visible = true;

    #[ORM\Column]
    private bool $isPublic = true;

    #[ORM\Column]
    private \DateTimeImmutable $createdAt;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'announcements')]
    #[ORM\JoinColumn(nullable: false)]
    private User $sender;

    /**
     * @var Collection<int, Role>
     */
    #[ORM\ManyToMany(targetEntity: Role::class, inversedBy: 'announcements')]
    #[ORM\JoinTable(name: 'announcement_target_roles')]
    private Collection $targetRoles;

    /**
     * @var Collection<int, UserTag>
     */
    #[ORM\ManyToMany(targetEntity: UserTag::class)]
    #[ORM\JoinTable(name: 'announcement_target_tags')]
    private Collection $targetTags;

    /**
     * @var Collection<int, User>
     */
    #[ORM\ManyToMany(targetEntity: User::class)]
    #[ORM\JoinTable(name: 'announcement_target_users')]
    private Collection $targetUsers;

    /**
     * @var Collection<int, Comment>
     */
    #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: 'announcement')]
    private Collection $comments;

    public function __construct()
    {
        $this->createdAt   = new \DateTimeImmutable();
        $this->targetRoles = new ArrayCollection();
        $this->targetTags  = new ArrayCollection();
        $this->targetUsers = new ArrayCollection();
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): static
    {
        $this->content = $content;
        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(?string $imagePath): static
    {
        $this->imagePath = $imagePath;
        return $this;
    }

    public function isInfoboard(): bool
    {
        return $this->infoboard;
    }

    public function setInfoboard(bool $infoboard): static
    {
        $this->infoboard = $infoboard;
        return $this;
    }

    public function isCommentsEnabled(): bool
    {
        return $this->commentsEnabled;
    }

    public function setCommentsEnabled(bool $commentsEnabled): static
    {
        $this->commentsEnabled = $commentsEnabled;
        return $this;
    }

    public function isVisible(): bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): static
    {
        $this->visible = $visible;
        return $this;
    }

    public function isPublic(): bool
    {
        return $this->isPublic;
    }

    public function setIsPublic(bool $isPublic): static
    {
        $this->isPublic = $isPublic;
        return $this;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getSender(): User
    {
        return $this->sender;
    }

    public function setSender(User $sender): static
    {
        $this->sender = $sender;
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
            $role->addAnnouncement($this);
        }
        return $this;
    }

    public function removeTargetRole(Role $role): static
    {
        if ($this->targetRoles->removeElement($role)) {
            $role->removeAnnouncement($this);
        }
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
     * @return Collection<int, Comment>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): static
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setAnnouncement($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): static
    {
        if ($this->comments->removeElement($comment)) {

            if ($comment->getAnnouncement() === $this) {
                $comment->setAnnouncement(null);
            }
        }

        return $this;
    }
}
