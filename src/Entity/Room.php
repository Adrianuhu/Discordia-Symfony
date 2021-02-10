<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 *
 * @ORM\Table(name="room", indexes={@ORM\Index(name="cod_room", columns={"cod_room"})})
 * @ORM\Entity
 */
class Room
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_room", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codRoom;

    /**
     * @var string
     *
     * @ORM\Column(name="img_room", type="string", length=50, nullable=false)
     */
    private $imgRoom;

    /**
     * @var string
     *
     * @ORM\Column(name="typeOfRoom", type="string", length=5, nullable=false)
     */
    private $typeofroom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="codRoom")
     */
    private $codUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codUser = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getCodRoom(): ?string
    {
        return $this->codRoom;
    }

    public function getImgRoom(): ?string
    {
        return $this->imgRoom;
    }

    public function setImgRoom(string $imgRoom): self
    {
        $this->imgRoom = $imgRoom;

        return $this;
    }

    public function getTypeofroom(): ?string
    {
        return $this->typeofroom;
    }

    public function setTypeofroom(string $typeofroom): self
    {
        $this->typeofroom = $typeofroom;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getCodUser(): Collection
    {
        return $this->codUser;
    }

    public function addCodUser(User $codUser): self
    {
        if (!$this->codUser->contains($codUser)) {
            $this->codUser[] = $codUser;
            $codUser->addCodRoom($this);
        }

        return $this;
    }

    public function removeCodUser(User $codUser): self
    {
        if ($this->codUser->contains($codUser)) {
            $this->codUser->removeElement($codUser);
            $codUser->removeCodRoom($this);
        }

        return $this;
    }

}
