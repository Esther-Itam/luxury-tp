<?php

namespace App\Entity;

use App\Repository\JobOfferRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobOfferRepository::class)
 */
class JobOffer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_activated;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $notes_job;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title_job;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job_type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $location_job;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category_job;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $closing_at;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $salary;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\ManyToOne(targetEntity=JobType::class)
     */
    private $type_job;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class)
     */
    private $job_offer;

    /**
     * @ORM\ManyToOne(targetEntity=JobCategory::class)
     */
    private $category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(string $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIsActivated(): ?bool
    {
        return $this->is_activated;
    }

    public function setIsActivated(?bool $is_activated): self
    {
        $this->is_activated = $is_activated;

        return $this;
    }

    public function getNotesJob(): ?string
    {
        return $this->notes_job;
    }

    public function setNotesJob(?string $notes_job): self
    {
        $this->notes_job = $notes_job;

        return $this;
    }

    public function getTitleJob(): ?string
    {
        return $this->title_job;
    }

    public function setTitleJob(string $title_job): self
    {
        $this->title_job = $title_job;

        return $this;
    }

    public function getJobType(): ?string
    {
        return $this->job_type;
    }

    public function setJobType(string $job_type): self
    {
        $this->job_type = $job_type;

        return $this;
    }

    public function getLocationJob(): ?string
    {
        return $this->location_job;
    }

    public function setLocationJob(?string $location_job): self
    {
        $this->location_job = $location_job;

        return $this;
    }

    public function getCategoryJob(): ?string
    {
        return $this->category_job;
    }

    public function setCategoryJob(string $category_job): self
    {
        $this->category_job = $category_job;

        return $this;
    }

    public function getClosingAt(): ?\DateTimeInterface
    {
        return $this->closing_at;
    }

    public function setClosingAt(?\DateTimeInterface $closing_at): self
    {
        $this->closing_at = $closing_at;

        return $this;
    }

    public function getSalary(): ?int
    {
        return $this->salary;
    }

    public function setSalary(?int $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getTypeJob(): ?JobType
    {
        return $this->type_job;
    }

    public function setTypeJob(?JobType $type_job): self
    {
        $this->type_job = $type_job;

        return $this;
    }

    public function getJobOffer(): ?Client
    {
        return $this->job_offer;
    }

    public function setJobOffer(?Client $job_offer): self
    {
        $this->job_offer = $job_offer;

        return $this;
    }

    public function getCategory(): ?JobCategory
    {
        return $this->category;
    }

    public function setCategory(?JobCategory $category): self
    {
        $this->category = $category;

        return $this;
    }
}
