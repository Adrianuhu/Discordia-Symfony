<?php
// src/Controller/UserRegister.php
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


class UserRegister extends AbstractController{

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

		
		$entityManager = $this->getDoctrine()->getManager();
		register_user($name, $surname, $nick, $email, $password, $gender, $entityManager);

		return $this->render('index.html.twig');
    }
}


// register a user
function register_user($name, $surname, $nick, $email, $password, $gender, $entityManager){
	
	$password_hash = password_hash($password, PASSWORD_DEFAULT);

	$new = new User();
	$new->setName($name);
	$new->setSurname($surname);
	$new->setNick($nick);
	$new->setMail($email);
	$new->setPhoto('default.png');
	$new->setPasswordHash($password_hash);
	$new->setDescription('');
	$new->setGender($gender);
	$new->setRol(0);

	$entityManager->persist($new);
	$entityManager->flush();
	
	
}



