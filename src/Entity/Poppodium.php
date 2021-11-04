<?php

namespace App\Entity;

use App\Repository\PoppodiumRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PoppodiumRepository::class)
 */
class Poppodium
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
     * @ORM\Column(type="string", length=60)
     */
    private $adres;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $postcode;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $woonplaats;

    /**
     * @ORM\Column(type="string", length=12)
     */
    private $telefoonnummer;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $website;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $logo_url;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $afbeelding_url;

    /**
     * @ORM\OneToMany(targetEntity=Optreden::class, mappedBy="poppodium")
     */
    private $Optredens;

    public function __construct()
    {
        $this->Optredens = new ArrayCollection();
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

    public function getAdres(): ?string
    {
        return $this->adres;
    }

    public function setAdres(string $adres): self
    {
        $this->adres = $adres;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function setPostcode(string $postcode): self
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getWoonplaats(): ?string
    {
        return $this->woonplaats;
    }

    public function setWoonplaats(string $woonplaats): self
    {
        $this->woonplaats = $woonplaats;

        return $this;
    }

    public function getTelefoonnummer(): ?string
    {
        return $this->telefoonnummer;
    }

    public function setTelefoonnummer(string $telefoonnummer): self
    {
        $this->telefoonnummer = $telefoonnummer;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getLogoUrl(): ?string
    {
        return $this->logo_url;
    }

    public function setLogoUrl(string $logo_url): self
    {
        $this->logo_url = $logo_url;

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

    /**
     * @return Collection|Optreden[]
     */
    public function getOptredens(): Collection
    {
        return $this->Optredens;
    }

    public function addOptreden(Optreden $optreden): self
    {
        if (!$this->Optredens->contains($optreden)) {
            $this->Optredens[] = $optreden;
            $optreden->setPoppodium($this);
        }

        return $this;
    }

    public function removeOptreden(Optreden $optreden): self
    {
        if ($this->Optredens->removeElement($optreden)) {
            // set the owning side to null (unless already changed)
            if ($optreden->getPoppodium() === $this) {
                $optreden->setPoppodium(null);
            }
        }

        return $this;
    }
}
