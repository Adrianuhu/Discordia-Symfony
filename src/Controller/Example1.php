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
     * @Route("/hello", name="hello")
     */
    public function home(){
        return new Response('<html><body>Hello</body></html>');
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
	/**
     * @Route("/default2/{num?4}", name="default2")
     */
	public function default2($num){		
		return new Response("<html><body> " . $num . "</body></html>");
	}
	
	
	/**
     * @Route("/square/{num}", name="square")
     */
	public function square($num){
		return $this->redirectToRoute('product', array('num1' => $num, 'num2' => $num));
	}
	/**
	* @Route("/testRequest", name = "testRequest")
	*/
	public function testRequest(Request $request){
		$ip = $request->getClientIp();
		return new Response(
            '<html><body>IP: '.$ip.'</body></html>'
        );
	}
	/**
	* @Route("/session1", name = "session1")
	*/
	public function session1(SessionInterface $session){
		$session->set("variable", 100);
		return $this->redirectToRoute('session2');
	}
	/**
	* @Route("/session2", name = "session2")
	*/
	public function session2(SessionInterface $session){
		$var = $session->get("variable");
		return new Response('<html><body>'.$var.'</body></html>'
        );
	}
	
	
	
}