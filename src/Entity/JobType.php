<?php

namespace App\Entity;

use App\Repository\JobTypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobTypeRepository::class)
 */
class JobType
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
    private $time_job;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTimeJob(): ?string
    {
        return $this->time_job;
    }

    public function setTimeJob(string $time_job): self
    {
        $this->time_job = $time_job;

        return $this;
    }
}
