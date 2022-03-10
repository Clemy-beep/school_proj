<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\WindowRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WindowRepository::class)]
#[ORM\Table(name: '`window`')]
#[ApiResource]
class Window
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $weight;

    #[ORM\Column(type: 'integer')]
    private $thickness;

    #[ORM\ManyToOne(targetEntity: Bus::class, inversedBy: 'windows')]
    #[ORM\JoinColumn(nullable: false)]
    private $bus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getThickness(): ?int
    {
        return $this->thickness;
    }

    public function setThickness(int $thickness): self
    {
        $this->thickness = $thickness;

        return $this;
    }

    public function getBus(): ?Bus
    {
        return $this->bus;
    }

    public function setBus(?Bus $bus): self
    {
        $this->bus = $bus;

        return $this;
    }
}
