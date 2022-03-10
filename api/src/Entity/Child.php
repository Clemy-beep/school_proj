<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ChildRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChildRepository::class)]
#[ApiResource]
class Child extends User
{
    #[ORM\ManyToOne(targetEntity: Guardian::class, inversedBy: 'children')]
    #[ORM\JoinColumn(nullable: false)]
    private Guardian $guardian;

    #[ORM\ManyToOne(targetEntity: Route::class, inversedBy: 'children')]
    #[ORM\JoinColumn(nullable: false)]
    private $route;


    public function getGuardian(): ?Guardian
    {
        return $this->guardian;
    }

    public function setGuardian(?Guardian $guardian): self
    {
        $this->guardian = $guardian;

        return $this;
    }

    public function getRoute(): ?Route
    {
        return $this->route;
    }

    public function setRoute(?Route $route): self
    {
        $this->route = $route;

        return $this;
    }
}
