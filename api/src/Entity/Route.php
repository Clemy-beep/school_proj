<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RouteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RouteRepository::class)]
#[ApiResource]
class Route
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\OneToOne(inversedBy: 'route', targetEntity: Bus::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $bus;

    #[ORM\OneToOne(inversedBy: 'route', targetEntity: Driver::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $driver;

    #[ORM\OneToMany(mappedBy: 'route', targetEntity: Child::class)]
    private $children;

    #[ORM\Column(type: 'datetime')]
    private $routeDateTime;

    public function __construct()
    {
        $this->children = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBus(): ?Bus
    {
        return $this->bus;
    }

    public function setBus(Bus $bus): self
    {
        $this->bus = $bus;

        return $this;
    }

    public function getDriver(): ?Driver
    {
        return $this->driver;
    }

    public function setDriver(Driver $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * @return Collection<int, Child>
     */
    public function getChildren(): Collection
    {
        return $this->children;
    }

    public function addChild(Child $child): self
    {
        if (!$this->children->contains($child)) {
            $this->children[] = $child;
            $child->setRoute($this);
        }

        return $this;
    }

    public function removeChild(Child $child): self
    {
        if ($this->children->removeElement($child)) {
            // set the owning side to null (unless already changed)
            if ($child->getRoute() === $this) {
                $child->setRoute(null);
            }
        }

        return $this;
    }

    public function getRouteDateTime(): ?\DateTimeInterface
    {
        return $this->routeDateTime;
    }

    public function setRouteDateTime(\DateTimeInterface $routeDateTime): self
    {
        $this->routeDateTime = $routeDateTime;

        return $this;
    }
}
