<?php
// src/Controller/EjemploRutaBase.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
/**
  * @Route("/base")	 
*/
class ExampleBaseRoute extends AbstractController{
	 /**
     * @Route("/hello")	 
     */
	 public function hello(){
        return new Response('<html><body>Hello</body></html>');
	 }
}