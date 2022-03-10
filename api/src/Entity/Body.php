<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BodyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BodyRepository::class)]
#[ApiResource]
class Body
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $weight;

    #[ORM\Column(type: 'string', length: 50)]
    private $color;

    #[ORM\OneToOne(mappedBy: 'body', targetEntity: Bus::class, cascade: ['persist', 'remove'])]
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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getBus(): ?Bus
    {
        return $this->bus;
    }

    public function setBus(Bus $bus): self
    {
        // set the owning side of the relation if necessary
        if ($bus->getBody() !== $this) {
            $bus->setBody($this);
        }

        $this->bus = $bus;

        return $this;
    }
}
