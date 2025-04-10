<?php

namespace App\Entity;

use App\Repository\SubmissionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubmissionRepository::class)]
class Submission
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $submittedBy = null;

    #[ORM\ManyToOne(inversedBy: 'submissions')]
    private ?Question $question = null;

    #[ORM\ManyToOne(inversedBy: 'submissions')]
    private ?Choice $selectedChoice = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $shortAnswer = null;

    #[ORM\Column]
    private ?bool $isCorrect = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubmittedBy(): ?User
    {
        return $this->submittedBy;
    }

    public function setSubmittedBy(?User $submittedBy): static
    {
        $this->submittedBy = $submittedBy;

        return $this;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): static
    {
        $this->question = $question;

        return $this;
    }

    public function getSelectedChoice(): ?Choice
    {
        return $this->selectedChoice;
    }

    public function setSelectedChoice(?Choice $selectedChoice): static
    {
        $this->selectedChoice = $selectedChoice;

        return $this;
    }

    public function getShortAnswer(): ?string
    {
        return $this->shortAnswer;
    }

    public function setShortAnswer(?string $shortAnswer): static
    {
        $this->shortAnswer = $shortAnswer;

        return $this;
    }

    public function isCorrect(): ?bool
    {
        return $this->isCorrect;
    }

    public function setIsCorrect(bool $isCorrect): static
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }
}
