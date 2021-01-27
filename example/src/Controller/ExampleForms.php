<?php
// src/Controller/EjemploFormularios.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
/*
	* @Route("/formHello", name = "formHello")
	* @Security("is_granted('ROLE_USER')")
	*/
class ExampleForms extends AbstractController
{
	
	public function formHello(Request $request)
	{
		//$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
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
		return $this->render('formHello.html.twig', array(
        'form' => $form->createView(),
		));
	} 
}