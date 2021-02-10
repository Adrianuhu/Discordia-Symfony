<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="mail", columns={"mail"}), @ORM\UniqueConstraint(name="nick", columns={"nick"})}, indexes={@ORM\Index(name="cod_user", columns={"cod_user"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="cod_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codUser;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=50, nullable=false)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=20, nullable=false)
     */
    private $nick;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=300, nullable=false)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="password_hash", type="string", length=80, nullable=false)
     */
    private $passwordHash;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=6, nullable=false)
     */
    private $gender;

    /**
     * @var bool
     *
     * @ORM\Column(name="rol", type="boolean", nullable=false)
     */
    private $rol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="usera")
     * @ORM\JoinTable(name="friend",
     *   joinColumns={
     *     @ORM\JoinColumn(name="userA", referencedColumnName="cod_user")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="userB", referencedColumnName="cod_user")
     *   }
     * )
     */
    private $userb;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Room", inversedBy="codUser")
     * @ORM\JoinTable(name="user_room",
     *   joinColumns={
     *     @ORM\JoinColumn(name="cod_user", referencedColumnName="cod_user")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="cod_room", referencedColumnName="cod_room")
     *   }
     * )
     */
    private $codRoom;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userb = new \Doctrine\Common\Collections\ArrayCollection();
        $this->codRoom = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getCodUser(): ?int
    {
        return $this->codUser;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getNick(): ?string
    {
        return $this->nick;
    }

    public function setNick(string $nick): self
    {
        $this->nick = $nick;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPasswordHash(): ?string
    {
        return $this->passwordHash;
    }

    public function setPasswordHash(string $passwordHash): self
    {
        $this->passwordHash = $passwordHash;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getRol(): ?bool
    {
        return $this->rol;
    }

    public function setRol(bool $rol): self
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUserb(): Collection
    {
        return $this->userb;
    }

    public function addUserb(User $userb): self
    {
        if (!$this->userb->contains($userb)) {
            $this->userb[] = $userb;
        }

        return $this;
    }

    public function removeUserb(User $userb): self
    {
        if ($this->userb->contains($userb)) {
            $this->userb->removeElement($userb);
        }

        return $this;
    }

    /**
     * @return Collection|Room[]
     */
    public function getCodRoom(): Collection
    {
        return $this->codRoom;
    }

    public function addCodRoom(Room $codRoom): self
    {
        if (!$this->codRoom->contains($codRoom)) {
            $this->codRoom[] = $codRoom;
        }

        return $this;
    }

    public function removeCodRoom(Room $codRoom): self
    {
        if ($this->codRoom->contains($codRoom)) {
            $this->codRoom->removeElement($codRoom);
        }

        return $this;
    }

}
