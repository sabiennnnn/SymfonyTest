<?php

namespace App\Entity;

use App\Repository\ArtiestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArtiestRepository::class)
 */
class Artiest
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $naam;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $genre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $omschrijving;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $afbeelding_url;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $website;

    /**
     * @ORM\OneToMany(targetEntity=Optreden::class, mappedBy="artiest")
     */
    private $Optreden;

    public function __construct()
    {
        $this->Optreden = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): self
    {
        $this->naam = $naam;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getAfbeeldingUrl(): ?string
    {
        return $this->afbeelding_url;
    }

    public function setAfbeeldingUrl(string $afbeelding_url): self
    {
        $this->afbeelding_url = $afbeelding_url;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

        return $this;
    }

    /**
     * @return Collection|Optreden[]
     */
    public function getOptreden(): Collection
    {
        return $this->Optreden;
    }

    public function addOptreden(Optreden $optreden): self
    {
        if (!$this->Optreden->contains($optreden)) {
            $this->Optreden[] = $optreden;
            $optreden->setArtiest($this);
        }

        return $this;
    }

    public function removeOptreden(Optreden $optreden): self
    {
        if ($this->Optreden->removeElement($optreden)) {
            // set the owning side to null (unless already changed)
            if ($optreden->getArtiest() === $this) {
                $optreden->setArtiest(null);
            }
        }

        return $this;
    }
}
