<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="cod_room", columns={"cod_room"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var int
     *
     * @ORM\Column(name="cod_message", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codMessage;

    /**
     * @var int
     *
     * @ORM\Column(name="cod_user", type="integer", nullable=false)
     */
    private $codUser;

    /**
     * @var string
     *
     * @ORM\Column(name="text_message", type="string", length=250, nullable=false)
     */
    private $textMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_message", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateMessage = 'CURRENT_TIMESTAMP';

    /**
     * @var \Room
     *
     * @ORM\ManyToOne(targetEntity="Room")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_room", referencedColumnName="cod_room")
     * })
     */
    private $codRoom;

    public function getCodMessage(): ?int
    {
        return $this->codMessage;
    }

    public function getCodUser(): ?int
    {
        return $this->codUser;
    }

    public function setCodUser(int $codUser): self
    {
        $this->codUser = $codUser;

        return $this;
    }

    public function getTextMessage(): ?string
    {
        return $this->textMessage;
    }

    public function setTextMessage(string $textMessage): self
    {
        $this->textMessage = $textMessage;

        return $this;
    }

    public function getDateMessage(): ?\DateTimeInterface
    {
        return $this->dateMessage;
    }

    public function setDateMessage(\DateTimeInterface $dateMessage): self
    {
        $this->dateMessage = $dateMessage;

        return $this;
    }

    public function getCodRoom(): ?Room
    {
        return $this->codRoom;
    }

    public function setCodRoom(?Room $codRoom): self
    {
        $this->codRoom = $codRoom;

        return $this;
    }


}
