<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class NewsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'app.news.title',
            ])
            ->add('brief', TextType::class, [
                'label' => 'app.news.brief',
            ])
            ->add('file', FileType::class, [
                'label' => 'app.image',
                'required' => false,
            ])
            ->add('description', TextType::class, [
                'label' => 'app.news.description',
            ])
        ;
    }
}
?>