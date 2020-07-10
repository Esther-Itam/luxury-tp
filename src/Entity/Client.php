<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
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
    private $name_society;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $activity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_customer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job_customer;

    /**
     * @ORM\Column(type="integer")
     */
    private $phone_customer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email_customer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $notes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameSociety(): ?string
    {
        return $this->name_society;
    }

    public function setNameSociety(string $name_society): self
    {
        $this->name_society = $name_society;

        return $this;
    }

    public function getActivity(): ?string
    {
        return $this->activity;
    }

    public function setActivity(string $activity): self
    {
        $this->activity = $activity;

        return $this;
    }

    public function getNameCustomer(): ?string
    {
        return $this->name_customer;
    }

    public function setNameCustomer(string $name_customer): self
    {
        $this->name_customer = $name_customer;

        return $this;
    }

    public function getJobCustomer(): ?string
    {
        return $this->job_customer;
    }

    public function setJobCustomer(string $job_customer): self
    {
        $this->job_customer = $job_customer;

        return $this;
    }

    public function getPhoneCustomer(): ?int
    {
        return $this->phone_customer;
    }

    public function setPhoneCustomer(int $phone_customer): self
    {
        $this->phone_customer = $phone_customer;

        return $this;
    }

    public function getEmailCustomer(): ?string
    {
        return $this->email_customer;
    }

    public function setEmailCustomer(string $email_customer): self
    {
        $this->email_customer = $email_customer;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }
}
