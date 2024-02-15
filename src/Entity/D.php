<?php

namespace App\Entity;

use App\Repository\DRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DRepository::class)]
class D
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $E = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getE(): ?string
    {
        return $this->E;
    }

    public function setE(string $E): static
    {
        $this->E = $E;

        return $this;
    }
}
