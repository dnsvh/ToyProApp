<?php
// src/Entity/CalendarEntry.php

namespace App\Entity;

use App\Entity\User;
use App\Entity\CalendarTag;
use App\Repository\CalendarEntryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CalendarEntryRepository::class)]
class CalendarEntry
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /** The date of this entry (e.g. “2025-06-15”) */
    #[ORM\Column(type: 'date')]
    private \DateTimeInterface $date;

    /** Time the user clocked in (nullable until they clock out) */
    #[ORM\Column(type: 'time', nullable: true)]
    private ?\DateTimeInterface $clockIn = null;

    /** Time the user clocked out (nullable until they clock out) */
    #[ORM\Column(type: 'time', nullable: true)]
    private ?\DateTimeInterface $clockOut = null;

    /** Total hours worked (a float, or int) */
    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $hoursWorked = null;

    /** Optional comment for that day */
    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $comment = null;

    /**
     * Which user this entry belongs to.
     * ManyToOne → one user can have many entries.
     */
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'calendarEntries')]
    #[ORM\JoinColumn(nullable: false)]
    private User $user;

    /**
     * @var Collection<int, CalendarTag>
     * A ManyToMany relationship → an entry can have zero or more “tags” (e.g. “Vacation”, etc).
     * We explicitly name the join table “calendar_entry_tags” so Doctrine will create that table.
     */
    #[ORM\ManyToMany(targetEntity: CalendarTag::class)]
    #[ORM\JoinTable(name: "calendar_entry_tags")]
    private Collection $tags;

    public function __construct()
    {
        $this->date        = new \DateTimeImmutable();
        $this->clockIn     = null;
        $this->clockOut    = null;
        $this->hoursWorked = null;
        $this->comment     = null;
        $this->tags        = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;
        return $this;
    }

    public function getClockIn(): ?\DateTimeInterface
    {
        return $this->clockIn;
    }

    public function setClockIn(?\DateTimeInterface $clockIn): static
    {
        $this->clockIn = $clockIn;
        return $this;
    }

    public function getClockOut(): ?\DateTimeInterface
    {
        return $this->clockOut;
    }

    public function setClockOut(?\DateTimeInterface $clockOut): static
    {
        $this->clockOut = $clockOut;
        return $this;
    }

    public function getHoursWorked(): ?float
    {
        return $this->hoursWorked;
    }

    public function setHoursWorked(?float $hoursWorked): static
    {
        $this->hoursWorked = $hoursWorked;
        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): static
    {
        $this->comment = $comment;
        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return Collection<int, CalendarTag>
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(CalendarTag $tag): static
    {
        if (!$this->tags->contains($tag)) {
            $this->tags->add($tag);
        }
        return $this;
    }

    public function removeTag(CalendarTag $tag): static
    {
        $this->tags->removeElement($tag);
        return $this;
    }

    public function recomputeHours(): void
    {
        if ($this->clockIn instanceof \DateTimeInterface && $this->clockOut instanceof \DateTimeInterface) {
            $seconds = $this->clockOut->getTimestamp() - $this->clockIn->getTimestamp();

            $this->hoursWorked = round($seconds / 3600, 2);
        }
    }
}
