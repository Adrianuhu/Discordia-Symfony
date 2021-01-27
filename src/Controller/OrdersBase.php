<?php
// src/Controller/OrdersBase.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use App\Entity\Restaurants;
use App\Entity\Categories;
use App\Entity\Orderproducts;
use App\Entity\Orders;
use App\Entity\Products;



class OrdersBase extends AbstractController{

     /**
     * @Route("/categories", name="categories")
     */
    public function categories() {       
		$entityManager = $this->getDoctrine()->getManager();
		$cats = $entityManager->getRepository(Categories::class)->findAll();
		return $this->render("categories.html.twig", array('categories'=>$cats));    
		
	}
	 /**
     * @Route("/products/{id}", name="products")
     */
    public function products($id) {       
		$entityManager = $this->getDoctrine()->getManager();
		$cat = $entityManager->find(Categories::class, $id);
		if(is_null($cat)){
            throw $this->createNotFoundException('Category not found');
        }  
		$prods = $cat->getProducts();
		return $this->render("products.html.twig", array('products'=>$prods));    
		
	}
	function getCartData($cart){
		$products = [];
		
		foreach ($cart as $code => $units){
            $product = $this->getDoctrine()->getRepository(Products::class)->find((int)$code);
            $elem = [];
            $elem['codProd'] = $product->getCodProd();
            $elem['name'] = $product->getName();
            $elem['weight'] = $product->getWeight();
            $elem['stock'] = $product->getStock();
            $elem['description'] = $product->getDescription();
            $elem['units'] = implode($units);
            $products[] = $elem;
        }
		return $products;
	}
	/**
     * @Route("/cart", name="cart")
     */
    public function cart(SessionInterface $session) {    
		$cart = $session->get('cart');
        if(is_null($cart)){
            $cart = array();
            $session->set($cart);
        }	
		$products = $this->getCartData($cart);
        return $this->render("cart.html.twig", array('products'=>$products));
		
	}
	/**
     * @Route("/add", name="add")
     */

    public function add(SessionInterface $session) {
        $id = $_POST['cod'];		
		$units= $_POST['units'];		
        $cart = $session->get('cart');
        if(is_null($cart)){
            $cart = array();
        }        

        if(isset($cart[$id])){
            $cart[$id]['units'] += intval($units);            
        }else{
            $cart[$id]['units'] = intval($units);
        }
        $session->set('cart', $cart);
        return $this->redirectToRoute('cart');
    }
	/**
     * @Route("/remove", name="remove")
     */
    public function remove(SessionInterface $session){
        $id = $_POST['cod'];		
		$units= $_POST['units'];		
        $cart = $session->get('cart');
        if(is_null($cart)){
            $cart = array();
        }
        /*si existe el código sumamos las unidades, con mínimo de 0*/
        if(isset($cart[$id])){
            $cart[$id]['units'] -= intval($units);   
			if($cart[$id]['units'] <= 0) {
				unset($cart[$id]);
			}
        
        }
        $session->set('cart', $cart);
        return $this->redirectToRoute('cart');
    }
    /**
     * @Route("/processOrder", name="processOrder")
     */
    public function processOrder(SessionInterface $session){
		$entityManager = $this->getDoctrine()->getManager();
		$cart = $session->get('cart');
		$errores = "";
		if(is_null($cart) ||count($cart)==0){
			//return $this->render("order.html.twig", array('error'=>1));
			return new Response("Cart error");		
		}else{
			$order = new Orders();
			$order->setDate(new \DateTime());
			$order->setSent(0);
			$order->setRestaurant($this->getUser());    
			$entityManager->persist($order);	
			foreach ($cart as $code => $units){
                $product =  $this->getDoctrine()->getRepository(Products::class)->find($code);
				if(is_null($product)){
					$errores .= "a";
				}
                $row = new Orderproducts();
                $row->setProduct($product);
                $row->setUnits( implode($units));
                $row->setOrder($order);
                $entityManager->persist($row);
				//actualizar el stock
				$product->setStock($product->getStock()- implode($units));
            }
		}
		try{
			$entityManager->flush();
		}catch (Throwable $e) {
		   // return $this->render("order.html.twig", array('error'=>2));	
			$errores = $errores . "db";			   
		}finally{
			return new Response("fin" .$errores);	
		}
	}
}
