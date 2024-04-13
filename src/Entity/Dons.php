<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dons
 *
 * @ORM\Table(name="dons", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Dons
{
    /**
     * @var int
     *
     * @ORM\Column(name="idDons", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddons;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="idUser")
     * })
     */
    private $iduser;

    public function getIddons(): ?int
    {
        return $this->iddons;
    }

    public function getIduser(): ?Utilisateur
    {
        return $this->iduser;
    }

    public function setIduser(?Utilisateur $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
    }


}
