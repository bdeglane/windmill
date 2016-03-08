<?php

namespace AppBundle\Twig\Extension;

use Twig_Extension;
use Twig_SimpleFilter;

class AppExtension extends Twig_Extension
{
	public function getName()
	{
		return 'app';
	}

	public function getFilters()
	{
		return [
			new Twig_SimpleFilter('sample', [$this, 'sampleFilter'])
		];
	}

	public function sampleFilter($sample)
	{
		return $sample;
	}
}
