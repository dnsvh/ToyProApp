<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Role;
use App\Entity\UserTag;
use App\Entity\Announcement;
use App\Entity\Comment;
use App\Entity\CalendarEntry;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\ManyToOne(targetEntity: Role::class)]
    #[ORM\JoinColumn(nullable: false)]
    private Role $role;

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    private ?string $lastName = null;

    /**
     * @var \DateTimeInterface|null
     */
    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $birthday = null;

    #[ORM\ManyToMany(targetEntity: UserTag::class)]
    #[ORM\JoinTable(name: 'user_user_tag')]
    private Collection $tags;

    /**
     * @var Collection<int, Announcement>
     */
    #[ORM\OneToMany(targetEntity: Announcement::class, mappedBy: 'sender')]
    private Collection $announcements;

    #[ORM\Column(type: 'boolean', options: ['default' => true])]
    private bool $enabled = true;

    /**
     * @var Collection<int, Comment>
     */
    #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: 'sender', orphanRemoval: true)]
    private Collection $comments;

    #[ORM\OneToMany(
        targetEntity: CalendarEntry::class,
        mappedBy: 'user',
        cascade: ['persist', 'remove']
    )]
    private Collection $calendarEntries;

    public function __construct()
    {
        $this->tags             = new ArrayCollection();
        $this->announcements    = new ArrayCollection();
        $this->comments         = new ArrayCollection();
        $this->calendarEntries  = new ArrayCollection();
        // $enabled defaults to true
    }

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
        $names = ['ROLE_USER'];
        $names[] = $this->role->getName();
        return array_unique($names);
    }

    public function setRole(Role $role): static
    {
        $this->role = $role;
        return $this;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
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
        // Clear any temp sensitive data here but not needed rn
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): static
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * @return Collection<int, UserTag>
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(UserTag $tag): static
    {
        if (!$this->tags->contains($tag)) {
            $this->tags->add($tag);
        }
        return $this;
    }

    public function removeTag(UserTag $tag): static
    {
        $this->tags->removeElement($tag);
        return $this;
    }

    /**
     * @return Collection<int, Announcement>
     */
    public function getAnnouncements(): Collection
    {
        return $this->announcements;
    }

    public function addAnnouncement(Announcement $announcement): static
    {
        if (!$this->announcements->contains($announcement)) {
            $this->announcements->add($announcement);
            $announcement->setSender($this);
        }
        return $this;
    }

    public function removeAnnouncement(Announcement $announcement): static
    {
        if ($this->announcements->removeElement($announcement)) {
            if ($announcement->getSender() === $this) {
                $announcement->setSender(null);
            }
        }
        return $this;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): static
    {
        $this->enabled = $enabled;
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
            $comment->setSender($this);
        }
        return $this;
    }

    public function removeComment(Comment $comment): static
    {
        if ($this->comments->removeElement($comment)) {
            if ($comment->getSender() === $this) {
                $comment->setSender(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, CalendarEntry>
     */
    public function getCalendarEntries(): Collection
    {
        return $this->calendarEntries;
    }

    public function addCalendarEntry(CalendarEntry $calendarEntry): static
    {
        if (!$this->calendarEntries->contains($calendarEntry)) {
            $this->calendarEntries->add($calendarEntry);
            $calendarEntry->setUser($this);
        }
        return $this;
    }

    public function removeCalendarEntry(CalendarEntry $calendarEntry): static
    {
        if ($this->calendarEntries->removeElement($calendarEntry)) {
            if ($calendarEntry->getUser() === $this) {
                $calendarEntry->setUser(null);
            }
        }
        return $this;
    }
}
