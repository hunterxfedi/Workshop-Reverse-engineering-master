<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Statutdons
 *
 * @ORM\Table(name="statutdons", indexes={@ORM\Index(name="idDons", columns={"idDons"})})
 * @ORM\Entity
 */
class Statutdons
{
    /**
     * @var int
     *
     * @ORM\Column(name="idStatutDons", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idstatutdons;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateChangement", type="date", nullable=false)
     */
    private $datechangement;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatStatutDons", type="boolean", nullable=false)
     */
    private $etatstatutdons;

    /**
     * @var \Dons
     *
     * @ORM\ManyToOne(targetEntity="Dons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDons", referencedColumnName="idDons")
     * })
     */
    private $iddons;

    public function getIdstatutdons(): ?int
    {
        return $this->idstatutdons;
    }

    public function getDatechangement(): ?\DateTimeInterface
    {
        return $this->datechangement;
    }

    public function setDatechangement(\DateTimeInterface $datechangement): static
    {
        $this->datechangement = $datechangement;

        return $this;
    }

    public function isEtatstatutdons(): ?bool
    {
        return $this->etatstatutdons;
    }

    public function setEtatstatutdons(bool $etatstatutdons): static
    {
        $this->etatstatutdons = $etatstatutdons;

        return $this;
    }

    public function getIddons(): ?Dons
    {
        return $this->iddons;
    }

    public function setIddons(?Dons $iddons): static
    {
        $this->iddons = $iddons;

        return $this;
    }


}
