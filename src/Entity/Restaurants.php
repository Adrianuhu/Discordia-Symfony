<?php

namespace App\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Restaurants
 *
 * @ORM\Table(name="restaurants", uniqueConstraints={@ORM\UniqueConstraint(name="UN_RES_COR", columns={"Mail"})})
 * @ORM\Entity
 */
class Restaurants implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="CodRes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codres;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=90, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=45, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Country", type="string", length=45, nullable=false)
     */
    private $country;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PC", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $pc = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="City", type="string", length=45, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="Address", type="string", length=200, nullable=false)
     */
    private $address;

    /**
     * @var int
     *
     * @ORM\Column(name="Role", type="integer", nullable=false)
     */
    private $role;
	
	public function getRoles()
	{
        return ['ROLE_USER'];
    }

	public function getSalt(){
		;
	}
	public function getUsername()
	{
		return $this->mail;
	}
	public function eraseCredentials() {
		;
	}
    public function getCodres(): ?int
    {
        return $this->codres;
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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPc(): ?int
    {
        return $this->pc;
    }

    public function setPc(?int $pc): self
    {
        $this->pc = $pc;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(int $role): self
    {
        $this->role = $role;

        return $this;
    }


}
