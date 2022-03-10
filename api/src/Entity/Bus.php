<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BusRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BusRepository::class)]
#[ApiResource]
class Bus
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $plateNum;

    #[ORM\Column(type: 'date')]
    private $serviceDate;

    #[ORM\Column(type: 'integer')]
    private $weight;

    #[ORM\OneToOne(inversedBy: 'bus', targetEntity: Body::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $body;

    #[ORM\OneToMany(mappedBy: 'bus', targetEntity: Wheel::class, orphanRemoval: true)]
    private $wheels;

    #[ORM\OneToMany(mappedBy: 'bus', targetEntity: Seat::class, orphanRemoval: true)]
    private $seats;

    #[ORM\OneToMany(mappedBy: 'bus', targetEntity: Window::class, orphanRemoval: true)]
    private $windows;

    #[ORM\OneToOne(mappedBy: 'bus', targetEntity: Route::class, cascade: ['persist', 'remove'])]
    private $route;

    public function __construct()
    {
        $this->wheels = new ArrayCollection();
        $this->seats = new ArrayCollection();
        $this->windows = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlateNum(): ?int
    {
        return $this->plateNum;
    }

    public function setPlateNum(int $plateNum): self
    {
        $this->plateNum = $plateNum;

        return $this;
    }

    public function getServiceDate(): ?\DateTimeInterface
    {
        return $this->serviceDate;
    }

    public function setServiceDate(\DateTimeInterface $serviceDate): self
    {
        $this->serviceDate = $serviceDate;

        return $this;
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

    public function getBody(): ?Body
    {
        return $this->body;
    }

    public function setBody(Body $body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return Collection<int, Wheel>
     */
    public function getWheels(): Collection
    {
        return $this->wheels;
    }

    public function addWheel(Wheel $wheel): self
    {
        if (!$this->wheels->contains($wheel)) {
            $this->wheels[] = $wheel;
            $wheel->setBus($this);
        }

        return $this;
    }

    public function removeWheel(Wheel $wheel): self
    {
        if ($this->wheels->removeElement($wheel)) {
            // set the owning side to null (unless already changed)
            if ($wheel->getBus() === $this) {
                $wheel->setBus(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Seat>
     */
    public function getSeats(): Collection
    {
        return $this->seats;
    }

    public function addSeat(Seat $seat): self
    {
        if (!$this->seats->contains($seat)) {
            $this->seats[] = $seat;
            $seat->setBus($this);
        }

        return $this;
    }

    public function removeSeat(Seat $seat): self
    {
        if ($this->seats->removeElement($seat)) {
            // set the owning side to null (unless already changed)
            if ($seat->getBus() === $this) {
                $seat->setBus(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Window>
     */
    public function getWindows(): Collection
    {
        return $this->windows;
    }

    public function addWindow(Window $window): self
    {
        if (!$this->windows->contains($window)) {
            $this->windows[] = $window;
            $window->setBus($this);
        }

        return $this;
    }

    public function removeWindow(Window $window): self
    {
        if ($this->windows->removeElement($window)) {
            // set the owning side to null (unless already changed)
            if ($window->getBus() === $this) {
                $window->setBus(null);
            }
        }

        return $this;
    }

    public function getRoute(): ?Route
    {
        return $this->route;
    }

    public function setRoute(Route $route): self
    {
        // set the owning side of the relation if necessary
        if ($route->getBus() !== $this) {
            $route->setBus($this);
        }

        $this->route = $route;

        return $this;
    }
}
