<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DriverRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DriverRepository::class)]
#[ApiResource]
class Driver extends User
{
    #[ORM\Column(type: 'integer')]
    private $drivingLicence;

    #[ORM\OneToOne(mappedBy: 'driver', targetEntity: Route::class, cascade: ['persist', 'remove'])]
    private $route;


    public function getDrivingLicence(): ?int
    {
        return $this->drivingLicence;
    }

    public function setDrivingLicence(int $drivingLicence): self
    {
        $this->drivingLicence = $drivingLicence;

        return $this;
    }

    public function getRoute(): ?Route
    {
        return $this->route;
    }

    public function setRoute(Route $route): self
    {
        // set the owning side of the relation if necessary
        if ($route->getDriver() !== $this) {
            $route->setDriver($this);
        }

        $this->route = $route;

        return $this;
    }
}
