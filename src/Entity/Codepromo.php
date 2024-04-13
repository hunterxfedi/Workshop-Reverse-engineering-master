<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codepromo
 *
 * @ORM\Table(name="codepromo")
 * @ORM\Entity
 */
class Codepromo
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCode", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcode;

    /**
     * @var int
     *
     * @ORM\Column(name="reductionAssocie", type="integer", nullable=false)
     */
    private $reductionassocie;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCode", type="string", length=255, nullable=false)
     */
    private $nomcode;

    public function getIdcode(): ?int
    {
        return $this->idcode;
    }

    public function getReductionassocie(): ?int
    {
        return $this->reductionassocie;
    }

    public function setReductionassocie(int $reductionassocie): static
    {
        $this->reductionassocie = $reductionassocie;

        return $this;
    }

    public function getNomcode(): ?string
    {
        return $this->nomcode;
    }

    public function setNomcode(string $nomcode): static
    {
        $this->nomcode = $nomcode;

        return $this;
    }


}
