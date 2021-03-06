<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LinkType extends AbstractType
{
	/**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('name', null, [
				'label' => 'nom du lien',
				'required' => true,
			])
			->add('category', null, [
				'required' => true,
			])
			->add('author', null, [
				'required' => true,
			])
			->add('url', null, [
				'required' => true,
			])
			->add('createdAt', DateTimeType::class, [
				'widget' => 'single_text',
				'html5' => true
			]);
	}

	/**
	 * @param OptionsResolver $resolver
	 */
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'AppBundle\Entity\Link'
		));
	}
}
