<?php
// src/Controller/EjemploRutaBase.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use App\Entity\Team;
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
	 
}