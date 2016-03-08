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
				"name" => "test",
				"price" => "otoototrortorroqfbqkfv:d"
			],
			[
				"url" => "/",
				"name" => "test-2",
				"price" => "otoototrortorroqfbqkfv:d"
			]
		];

		return $this->render('AppBundle:Default:Container/container.html.twig', ["items" => $items]);
	}
}