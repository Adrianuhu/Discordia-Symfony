<?php
// src/Controller/Example.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Message;
use App\Entity\Room;
use App\Entity\User;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityManagerInterface;


class Example2 extends AbstractController{

	/**
	 * @Route("/register", name="register")
     */
	public function register(){
		return $this->render('register.html.twig');
    }

	/**
	 * @Route("/registerU", name="registerU")
     */
	public function registerU(Request $request, SessionInterface $session){
		
		$name=$request->get("name");
		$surname=$request->get("surname");
		$nick=$request->get("nick");
		$email=$request->get("email");
		$password=$request->get("password");
		$gender=$request->get("gender");
		register_user($name, $surname, $nick, $email, $password, $gender);

		return $this->render('index.html.twig');
    }
}


// register a user
function register_user($name, $surname, $nick, $email, $password, $gender){
	
	$res = load_config(dirname(__FILE__)."/configuration.xml", dirname(__FILE__)."/configuration.xsd");
	$db = new \PDO($res[0], $res[1], $res[2]);

	$password_hash = password_hash($password, PASSWORD_DEFAULT);

	$ins = "INSERT INTO `user` 
	(`cod_user`, `name`, `surname`, `nick`, `mail`, `photo`, `password_hash`, `description`, `gender`, `rol`) VALUES 
	(NULL, '$name', '$surname', '$nick', '$email', 'default.png', '$password_hash', '', '$gender',0)";

	$resul = $db->query($ins);
	
	if (!$resul) {
		return FALSE;
	}
	
	return $resul;

}



