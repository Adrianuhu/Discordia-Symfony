<?php
// src/Controller/EjemploFormularios.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Team;
use App\Entity\PlayerBidirectional;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Mailer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class ExampleForms extends AbstractController
{
	/**
	* @Route("/formHello", name = "formHello")
	* @IsGranted("ROLE_USER")
	*/
	
	public function formHello(Request $request)
	{
		#$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
		$form = $this->createFormBuilder()
			->add('name', TextType::class, array('attr' => array('class'=>'error')))
			->add('surname', TextType::class)
			->add('send', SubmitType::class, array('label' => 'Send'))
			->getForm();

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {			
			$data = $form->getData();		
			$name = $data['name'];
			$surname = $data['surname'];
			return new Response('<html><body>Hello '. $name.' '. $surname .'</body></html>');
		}
		return $this->render('formHello.html.twig', array('form' => $form->createView(),
		));
	} 
	
	/**
	* @Route("/newTeam", name = "newTeam")
	*/
	public function newTeam(Request $request){
		$form = $this->createFormBuilder()
			->add('name', TextType::class)
			->add('city', TextType::class)
			->add('foundation', TextType::class)
			->add('members', TextType::class)
			->add('send', SubmitType::class, array('label' => 'Send'))
			->getForm();
		$form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid()) {			
			$data = $form->getData();		
			$name = $data['name'];
			$city = $data['city'];
			$year = $data['foundation'];
			$members = $data['members'];
			$team = new Team();
			$team->setName($name);
			$team->setCity($city);
			$team->setMembers($members);
			$team->setFounded($year);
			$em = $this->getDoctrine()->getManager();
			$em->persist($team);
			$em->flush();
			$id = $team->getId();
			return new Response("<html><body>Inserted with id $id </body></html>");
		}
		
		return $this->render('formHello.html.twig', array('form' => $form->createView()));
        
		}
		
	/**
	* @Route("/sendEmail", name = "sendEmail")
	*/
	public function sendEmail(Request $request, MailerInterface $mailer){
		$form = $this->createFormBuilder()
			->add('address', TextType::class)
			->add('subject', TextType::class)
			->add('text', TextType::class)
			->add('send', SubmitType::class, array('label' => 'Send'))
			->getForm();
		$form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid()) {		
			$data = $form->getData();		
			$address = $data['address'];
			$subject = $data['subject'];
			$text = $data['text'];

			$email = (new Email())
			->from('hello@example.com')
			 ->to($address)
			 //->cc('cc@example.com')
			 //->bcc('bcc@example.com')
			 //->replyTo('fabien@example.com')
			 //->priority(Email::PRIORITY_HIGH)
			 ->subject($address)
			 ->text($text)
			 ->html('<p>Send!</p>');
 
		 $mailer->send($email);
 
		 return new Response('<html><body>Hello</body></html>');
		}
		
		return $this->render('formHello.html.twig', array('form' => $form->createView()));
        
        }

}