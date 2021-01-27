<?php
// src/Team.php
namespace App\Entity;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="team")
*/
class Team{
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
}
	
	
	
	
	
	
	
	
	