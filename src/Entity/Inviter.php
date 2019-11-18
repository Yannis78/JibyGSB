<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InviterRepository")
 */
class Inviter
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Praticien", inversedBy="inviters")
     */
    private $lespraticiens;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ActiviteComp", inversedBy="inviters")
     */
    private $lesactivites;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLespraticiens(): ?Praticien
    {
        return $this->lespraticiens;
    }

    public function setLespraticiens(?Praticien $lespraticiens): self
    {
        $this->lespraticiens = $lespraticiens;

        return $this;
    }

    public function getLesactivites(): ?ActiviteComp
    {
        return $this->lesactivites;
    }

    public function setLesactivites(?ActiviteComp $lesactivites): self
    {
        $this->lesactivites = $lesactivites;

        return $this;
    }
}
