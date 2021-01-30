<?php
// src/Controller/Example.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Example1 extends AbstractController{
    /**
     * @Route("/index", name="index")
     */
    public function index(){
		
		return $this->render('index.html.twig');
    }
    /**
     * @Route("/main", name="main")
     */
    public function main(){
		
		return $this->render('main.html.twig');
    }
	/**
     * @Route("/product/{num1}/{num2}", name="product")
     */
	public function product($num1, $num2){
		$product = $num1 * $num2;
		return new Response("<html><body> " . $product . "</body></html>");
	}
	/**
     * @Route("/default1/{num}", name="default1")
     */
	public function default1($num = 3){		
		return new Response("<html><body> " . $num . "</body></html>");
	}
	
	
	
}