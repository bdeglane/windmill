<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	public function indexAction()
	{
		//$items = [
		//	[
		//		"url" => "/",
		//		"name" => "test",
		//		"price" => "otoototrortorroqfbqkfv:d"
		//	],
		//	[
		//		"url" => "/",
		//		"name" => "test-2",
		//		"price" => "otoototrortorroqfbqkfv:d"
		//	]
		//];

		//$em = $this->getDoctrine()->getManager();
		//$items = $em->getRepository('AppBundle:Link')->findAll();

		//return $this->render('AppBundle:Default:Container/container.html.twig', ["items" => $items]);
		$items = $this->getDoctrine()->getRepository('AppBundle:Link')->findLink();
		$content = $this->get('templating')->render('AppBundle:Default:Container/container.html.twig', ["items" => $items]);
		return new Response($content);
	}

	public function indexSinceAction($id)
	{
		$items = $this->getDoctrine()->getRepository('AppBundle:Link')->findLinkSince($id);
		$content = $this->get('templating')->render('AppBundle:Default:Container/container.html.twig', ["items" => $items]);
		return new Response($content);
	}
}