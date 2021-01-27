<?php
// src/Controller/ExercisesCap8.php
namespace App\Controller;
use App\Entity\PlayerBidirectional;
use App\Entity\TeamBidirectional;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class ExercisesCap8 extends AbstractController{
    /** Ejercicio 8.1
     * @Route("/remainder/{num1}/{num2}", name="remainder")
     */
    public function remainder($num1, $num2 = 2){		
		$remainder = $num1 % $num2;
	    return new Response("<html><body>$remainder</body></html>");   
	}
	/** 
     * @Route("/factorial/{num}", name="factorial")
     */
    public function factorial($num){		
        if(is_numeric($num) and $num >= 0){
			$resul = 1;
			for($i=2; $i <= $num; $i++){
				$resul = $resul * $i;
			}			
			return new Response("<html><body>$resul</body></html>");
		}else{
			return new Response('<html><body>Check input data</body></html>');
		}
	}
	
	/** 
     * @Route("/factorialTemplate/{num}", name="factorialTemplate")
     */
    public function factorialTemplate($num){		
		$error = FALSE;
		$resul = 1;
        if(is_numeric($num) and $num >= 0){			
			for($i=2; $i <= $num; $i++){
				$resul = $resul * $i;
			}						
		}else{
			$error = TRUE;			
		}		
		return $this->render('factorial.html.twig', 
		array ('error' => $error, 'resul' => $resul));
	}
	/*E2. Write a controller that that shows a table with the data of all the players.*/
	/** 
     * @Route("/players", name="players")
     */
	 public function players(){		
		$entityManager = $this->getDoctrine()->getManager();	
		$players = $entityManager->getRepository(PlayerBidirectional::class)->findAll();

		return $this->render('playersTable.html.twig', 
		array ('players' => $players));

	}
	/*	E3. Write a controller that that receives the code of a team
	and shows a table with the data of all the players.*/
	/** 
     * @Route("/teamPlayers/{id}", name="teamPlayers")
     */
	 public function teamPlayers($id){		
		$entityManager = $this->getDoctrine()->getManager();	
		$team = $entityManager->find(TeamBidirectional::class, $id);		
		$players = $team->getPlayers();					
		return $this->render('playersTable.html.twig', 
		array ('players' => $players));

	}
	/* with error control */
	/** 
     * @Route("/teamPlayers2/{id}", name="teamPlayers2")
     */
	 public function teamPlayers2($id){		
		$error = 0;
		$entityManager = $this->getDoctrine()->getManager();	
		$team = $entityManager->find(TeamBidirectional::class, $id);
		$players = null;
		if(is_null($team)){
			$error = 1;
		}else{
			$players = $team->getPlayers();	
			if(count($players)==0){
				$error = 2;
			}
		}
		return $this->render('playersTable2.html.twig', 
			array ('players' => $players, 'error' => $error));

	}
	/*E6. Write a controller that that shows a list with links
to the previous controllers.*/
     /** 
     * @Route("/listlinks", name="listlinks")
     */
	public function listlinks(){				
		return $this->render('listlinks.html.twig');

	}

	
}