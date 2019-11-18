<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OffrirRepository")
 */
class Offrir
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Medicament", inversedBy="offrirs")
     */
    private $lesmedicaments;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RapportVisite", inversedBy="offrirs")
     */
    private $lesrapports;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getLesmedicaments(): ?Medicament
    {
        return $this->lesmedicaments;
    }

    public function setLesmedicaments(?Medicament $lesmedicaments): self
    {
        $this->lesmedicaments = $lesmedicaments;

        return $this;
    }

    public function getLesrapports(): ?RapportVisite
    {
        return $this->lesrapports;
    }

    public function setLesrapports(?RapportVisite $lesrapports): self
    {
        $this->lesrapports = $lesrapports;

        return $this;
    }
}
