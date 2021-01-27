<?php
// src/Controller/ExampleTemplates.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExampleTemplates extends AbstractController{
	 /**
     * @Route("/salutation/{name}", name="salutation")	 
     */
	 public function salutation($name){
		return $this->render('salutation.html.twig', array ( 'name' => $name));
	 }
	 /**
     * @Route("/positive/{num}", name="positive")
     */
	public function positive($num){
		return $this->render('if.html.twig', array ( 'number' => $num));
	}
	 /**
     * @Route("/table/", name="table")	 
     */
	 public function table(){
		$rows = array(array('code'=> '1', 'name' =>'Sevilla' ),
						array('code'=> '2', 'name' =>'Madrid' ));
		
		return $this->render('table.html.twig', array ( 'rows' => $rows));
	 }
	 /**
     * @Route("/paths/", name="paths")	 
     */
	public function paths(){		
		$n = 55;
		return $this->render('paths.html.twig', array ( 'number' => $n));
	 }
	 /**
     * @Route("/includet/", name="includet")	 
     */
	 public function includet(){	

		return $this->render('base_order.html.twig');
	 }
	 /**
     * @Route("/showCat/", name="showCat")	 
     */
	 public function showCat(){	
		$cat = array(array('code'=> '1', 'name' =>'Bebidas' ),
						array('code'=> '2', 'name' =>'Comida' ));
		
		return $this->render('categories.html.twig', array ( 'categories' => $cat));
	 }
	
	 
	 
}