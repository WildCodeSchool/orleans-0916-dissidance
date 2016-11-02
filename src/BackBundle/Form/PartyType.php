<?php

namespace BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class PartyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('artist')
            ->add('place')
            ->add('content')
            ->add('soundcloud')
            ->add('keyword')
            ->add('imgCover', FileType::class)
            ->add('imgSlides', FileType::class, array(
                'multiple' => true,
                'data_class' => null,
            ));

    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackBundle\Entity\Party'
        ));
    }
}
