<?php

namespace AppBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'app.product.name',
            ])
            ->add('price', NumberType::class, [
                'label' => 'app.product.price',
            ])
            ->add('description', TextType::class, [
                'label' => 'app.product.description',
            ])
            ->add('file', FileType::class, [
                'label' => 'app.image',
                'required' => false
            ])
            ->add('category', EntityType::class, [
                'label' => 'app.product.category',
                'class' => 'AppBundle\Entity\Category',
                'choice_label' => 'title',
            ])
        ;
    }
}
?>