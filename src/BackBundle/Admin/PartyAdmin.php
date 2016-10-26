<?php
// src/BackBundle/Admin/PartyAdmin.php

namespace BackBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class PartyAdmin extends Admin{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
            ->add('artist')
            ->add('place')
            ->add('content')
            ->add('soundcloud')
            ->add('keyword')
            ->add('imgSlide')
            ->add('imgCover')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('artist')
            ->add('keyword')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('artist')
            ->add('place')
            ->add('content')
            ->add('soundcloud')
            ->add('keyword')
            ->add('imgSlide')
            ->add('imgCover')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('title')
            ->add('artist')
            ->add('place')
            ->add('content')
            ->add('soundcloud')
            ->add('keyword')
            ->add('imgSlide')
            ->add('imgCover')
        ;
    }
}