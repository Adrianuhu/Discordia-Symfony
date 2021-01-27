<?php
// src/TeamBidirectional.php
namespace App\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity 
 * @ORM\Table(name="team")
*/
class TeamBidirectional{
	/** @ORM\Column(type="integer")
	* 	@ORM\Id
	*   @ORM\GeneratedValue
	*/
	private $id;
	/** @ORM\Column(type="string")*/
	private $name;
	/** @ORM\Column(type="integer")*/	
	private $founded;
	/** @ORM\Column(type="integer")*/
	private $members;
	/** @ORM\Column(type="string")*/
	private $city;
    /**
     * @ORM\OneToMany(targetEntity="PlayerBidirectional", mappedBy="team")
     */
	private $players;

    /**
     * TeamBidirectional constructor.
     */
    public function __construct()
    {
        $this->players = new ArrayCollection();
    }


    public function getId(){
		return $this->id;
	}
	public function getCity(){
		return $this->city;
	}
	public function getName(){
		return $this->name;
	}
	public function getMembers(){
		return $this->members;
	}
	public function getFounded(){
		return $this->founded;
	}
	public function setCity($city){
		$this->city = $city;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function setMembers($members){
		$this->members = $members;
	}
	public function setFounded($founded){
		$this->founded = $founded;
	}

    /**
     * @return ArrayCollection
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @param ArrayCollection $players
     */
    public function setPlayers($players)
    {
        $this->players = $players;
    }

}
	
	
	
	
	
	
	
	
	