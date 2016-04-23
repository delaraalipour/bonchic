<?php

namespace AppBundle\Form\Extension;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mobile', TextType::class, [
                'label' => 'app.form.registration.mobile',
            ])
            ->add('gender', ChoiceType::class, [
                'label' => 'app.form.registration.gender',
                'choices' => [
                    'Female' => 'f',
                    'Male' => 'm',
                    'Unknown' => 'u',
                ]
            ])
        ;
    }

    /**
     * Returns the name of the type being extended.
     *
     * @return string The name of the type being extended
     */
    public function getExtendedType()
    {
        return RegistrationFormType::class;
    }
}