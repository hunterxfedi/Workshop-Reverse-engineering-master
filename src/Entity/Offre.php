<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="idCodePromo", columns={"idCodePromo"})})
 * @ORM\Entity
 */
class Offre
{
    /**
     * @var int
     *
     * @ORM\Column(name="idOffre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idoffre;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionOffre", type="string", length=255, nullable=false)
     */
    private $descriptionoffre;

    /**
     * @var string
     *
     * @ORM\Column(name="nomOffre", type="string", length=255, nullable=false)
     */
    private $nomoffre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var \Codepromo
     *
     * @ORM\ManyToOne(targetEntity="Codepromo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCodePromo", referencedColumnName="idCode")
     * })
     */
    private $idcodepromo;

    public function getIdoffre(): ?int
    {
        return $this->idoffre;
    }

    public function getDescriptionoffre(): ?string
    {
        return $this->descriptionoffre;
    }

    public function setDescriptionoffre(string $descriptionoffre): static
    {
        $this->descriptionoffre = $descriptionoffre;

        return $this;
    }

    public function getNomoffre(): ?string
    {
        return $this->nomoffre;
    }

    public function setNomoffre(string $nomoffre): static
    {
        $this->nomoffre = $nomoffre;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): static
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): static
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getIdcodepromo(): ?Codepromo
    {
        return $this->idcodepromo;
    }

    public function setIdcodepromo(?Codepromo $idcodepromo): static
    {
        $this->idcodepromo = $idcodepromo;

        return $this;
    }


}
