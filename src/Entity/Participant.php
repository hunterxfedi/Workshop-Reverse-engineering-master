<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant", indexes={@ORM\Index(name="fk_id_ab", columns={"id_evenement"})})
 * @ORM\Entity
 */
class Participant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_participant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParticipant;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="id_evenement", type="integer", nullable=false)
     */
    private $idEvenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_part", type="date", nullable=false)
     */
    private $datePart;

    public function getIdParticipant(): ?int
    {
        return $this->idParticipant;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdEvenement(): ?int
    {
        return $this->idEvenement;
    }

    public function setIdEvenement(int $idEvenement): static
    {
        $this->idEvenement = $idEvenement;

        return $this;
    }

    public function getDatePart(): ?\DateTimeInterface
    {
        return $this->datePart;
    }

    public function setDatePart(\DateTimeInterface $datePart): static
    {
        $this->datePart = $datePart;

        return $this;
    }


}
