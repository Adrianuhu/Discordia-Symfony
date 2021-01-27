<?php
namespace App\Entity;
use Symfony\Component\Serializer\Annotation\MaxDepth;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="player")
 */
class PlayerBidirectional
{
    /** @ORM\Column(type="integer")
     * 	@ORM\Id
     *   @ORM\GeneratedValue
     */	 
    private $id;
    /** @ORM\Column(type="string")*/
    private $name;
    /** @ORM\Column(type="string")*/
    private $surname;
    /** @ORM\Column(type="integer")*/
	
    private $age;
    /**
     * @ORM\ManyToOne(targetEntity="TeamBidirectional", inversedBy="players")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     **/
	
    private $team;

    /**
     * Player constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

     /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param mixed $team
     */
    public function setTeam($team)
    {
        $this->team = $team;
    }


}