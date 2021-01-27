<?php
// src/Controller/EjemploRutaBase.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use App\Entity\Team;
use App\Entity\PlayerBidirectional;

class ExampleDataBase extends AbstractController{
	 /**
     * @Route("/showTeam")	 
     */
	 public function showTeam(){
        $entityManager = $this->getDoctrine()->getManager();
		$eq = $entityManager->find(Team::class, 1);
		$name = $eq->getName();
        return new Response('<html><body>'. $name . '</body></html>');
	 }

	 /**
     * @Route("/showTeamNumber/{num}", name="showTeamNumber") 
     */

	 public function showTeamNumber($num){
        $entityManager = $this->getDoctrine()->getManager();
		$eq = $entityManager->find(Team::class, $num);
		$name = $eq->getName();
		$founded = $eq->getFounded();
		$members = $eq->getMembers();
		$city = $eq->getCity();
        return new Response('<html><body>'. $name . '<br/>'. $founded.'<br/>'. $members.'<br/>'. $city. '</body></html>');
	 }
	 
	 
	 /**
     * @Route("/players", name="players") 
     */

	public function players($num){
        $entityManager = $this->getDoctrine()->getManager();

		$players = $entityManager->getRepository(PlayerBidirectional::class)->findAll();
	
        return $this->render('playersTable.html.twig', array('players'=> $players));
	 }
	 
	 /**
     * @Route("/teamPlayers/{$id}")
     */
    public function teamPlayers($id){
        $entityManager = $this->getDoctrine()->getManager();
        $team = $entityManager->find(TeamBidirectional::class, $id);
        $players = $team->getPlayers();
        return $this->render('playersTable.html.twig', array('players' => $players));
     }
	 
}