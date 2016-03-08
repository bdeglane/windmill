<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function indexAction()
	{
		$items = [
			[
				"url" => "/",
				"name" => "test"
			],
			[
				"url" => "/",
				"name" => "test-2"
			]
		];

		return $this->render('AppBundle:Default:Container/container.html.twig', ["items" => $items]);
	}
}