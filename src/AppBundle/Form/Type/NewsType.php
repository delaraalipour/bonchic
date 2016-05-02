<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'lable' => 'app.news.title',
            ])
            ->add('brief', TextType::class, [
                'lable' => 'app.news.brief',
            ])
            ->add('file', FileType::class, [
                'lable' => 'app.image',
                'required' => false,
            ])
            ->add('description', TextType::class, [
                'lable' => 'app.news.description',
            ])
        ;
    }
}
?>