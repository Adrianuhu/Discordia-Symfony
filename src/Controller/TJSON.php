<?php
// src/Controller/TJSON.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\PlayerBidirectional;
use App\Entity\TeamBidirectional;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class TJSON extends AbstractController{
    /**
     * @Route("/testJSON", name="TestJSON")
     */
	 public function testJSON(){
	 $encoders = [new XmlEncoder(), new JsonEncoder()];
$normalizers = [new ObjectNormalizer()];

$serializer = new Serializer($normalizers, $encoders);
		$entityManager = $this->getDoctrine()->getManager();
		$eq = $entityManager->getRepository(PlayerBidirectional::class)->findAll();
		
	
		$jsonContent = $serializer->serialize($eq, 'json');
		return new Response('<html><body>'. $jsonContent . '</body></html>');
//		return new Response('<html><body></body></html>');
	 }
	
}