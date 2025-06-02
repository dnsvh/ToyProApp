<?php
// src/Entity/DocumentLog.php

namespace App\Entity;

use App\Repository\DocumentLogRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use App\Entity\Document;

#[ORM\Entity(repositoryClass: DocumentLogRepository::class)]
class DocumentLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private string $action;

    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $loggedAt;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private User $performedBy;

    #[ORM\ManyToOne(targetEntity: Document::class, inversedBy: 'logs')]
    #[ORM\JoinColumn(nullable: false)]
    private Document $document;

    public function __construct()
    {
        $this->loggedAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): static
    {
        $this->action = $action;
        return $this;
    }

    public function getLoggedAt(): \DateTimeInterface
    {
        return $this->loggedAt;
    }

    public function setLoggedAt(\DateTimeInterface $loggedAt): static
    {
        $this->loggedAt = $loggedAt;
        return $this;
    }

    public function getPerformedBy(): User
    {
        return $this->performedBy;
    }

    public function setPerformedBy(User $user): static
    {
        $this->performedBy = $user;
        return $this;
    }

    public function getDocument(): Document
    {
        return $this->document;
    }

    public function setDocument(Document $doc): static
    {
        $this->document = $doc;
        return $this;
    }
}
