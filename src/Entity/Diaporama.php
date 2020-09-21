<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DiaporamaRepository")
 */
class Diaporama
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $diapo1;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $diapo2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiapo1(): ?string
    {
        return $this->diapo1;
    }

    public function setDiapo1(string $diapo1): self
    {
        $this->diapo1 = $diapo1;

        return $this;
    }

    public function getDiapo2(): ?string
    {
        return $this->diapo2;
    }

    public function setDiapo2(string $diapo2): self
    {
        $this->diapo2 = $diapo2;

        return $this;
    }
}
